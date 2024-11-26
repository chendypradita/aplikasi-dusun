@extends('layouts.app')

@section('title', 'Daftar Permohonan Keluhan')

@section('content')
<div class="container">
    <h2 class="display-4 text-center mb-4">Daftar Permohonan Keluhan</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Warga</th>
                    <th>Keluhan</th>
                    <th>Tanggal</th>
                    <th>File</th>
                    <th>Aksi</th> <!-- Kolom untuk tombol aksi -->
                </tr>
            </thead>
            <tbody>
                @foreach ($permohonans as $permohonan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $permohonan->warga->nama }}</td>
                        <td>{{ $permohonan->keluhan }}</td>
                        <td>{{ $permohonan->created_at->format('d-m-Y') }}</td>
                        <td>
                            @if ($permohonan->file_path)
                                <a href="{{ Storage::url($permohonan->file_path) }}" target="_blank">Unduh File</a>
                            @else
                                Tidak ada file
                            @endif
                        </td>
                        <td>
                            <!-- Tombol View -->
                            <a href="{{ route('permohonan.show', $permohonan->id) }}" class="btn btn-info btn-sm">Lihat</a>

                            <!-- Tombol Edit -->
                            <a href="{{ route('permohonan.edit', $permohonan->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Tombol Delete -->
                            <form action="{{ route('permohonan.destroy', $permohonan->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
