<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\Warga;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function index()
    {
        // Menampilkan semua permohonan
        $permohonans = Permohonan::with('warga')->get();
        return view('permohonan.index', compact('permohonans'));
    }

    public function create()
    {
        // Menampilkan form untuk mengirimkan keluhan
        $wargas = Warga::all();
        return view('permohonan.create', compact('wargas'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'warga_id' => 'required|exists:wargas,id', // Pastikan warga ada
            'keluhan' => 'required|string|max:1000',
        ]);

        // Menyimpan permohonan keluhan
        Permohonan::create([
            'warga_id' => $request->warga_id,
            'keluhan' => $request->keluhan,
        ]);

        return redirect()->route('permohonan.index')->with('success', 'Keluhan berhasil dikirim.');
    }
}
