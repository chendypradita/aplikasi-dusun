<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PermohonanController extends Controller
{
    public function index()
    {
        // Menampilkan semua permohonan
        $permohonans = Permohonan::with('warga')->get();
        return view('permohonan.index', compact('permohonans'));
    }
    public function show($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        return view('permohonan.show', compact('permohonan'));
    }
    public function edit($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        $wargas = Warga::all(); // Memperoleh data warga untuk memilihnya
        return view('permohonan.edit', compact('permohonan', 'wargas'));
    }
    public function destroy($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        $permohonan->delete();

        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil dihapus');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'warga_id' => 'required',
            'keluhan' => 'required',
        ]);

        $permohonan = Permohonan::findOrFail($id);
        $permohonan->update($request->all());

        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil diperbarui');
    }

    public function create()
    {
        // Menampilkan form untuk mengirimkan keluhan
        $wargas = Warga::all();
        return view('permohonan.create', compact('wargas'));
    }

    /*************  ✨ Codeium Command ⭐  *************/
    /**
     * Stores a new complaint request in the database.
     *
     * Validates the incoming request data to ensure the 'warga_id' exists in
     * the 'wargas' table and 'keluhan' is a required string with a maximum
     * length of 1000 characters. If validation passes, creates a new
     * 'Permohonan' entry with the provided 'warga_id' and 'keluhan'.
     *
     * Redirects back to the 'permohonan.index' route with a success message
     * upon successful creation.
     *
     * @param Request $request The HTTP request containing the complaint data.
     * @return \Illuminate\Http\RedirectResponse A redirect response to the index route with a success message.
     */
    /******  566afe89-57a2-4cb6-97b0-c92f3e654ba6  *******/
    public function store(Request $request)
    {
        $request->validate([
            'warga_id' => 'required|exists:wargas,id',
            'keluhan' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,jpg,png,jpeg|max:2048',
        ]);

        // Menyimpan keluhan
        $permohonan = new Permohonan();
        $permohonan->warga_id = $request->warga_id;
        $permohonan->keluhan = $request->keluhan;

        // Menangani file jika ada
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('keluhan_files');
            $permohonan->file_path = $path;
        }

        $permohonan->save();

        return redirect()->route('permohonan.index')->with('success', 'Keluhan berhasil dikirim!');
    }
}
