@extends('layouts.app')

@section('title', 'Data Warga')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Daftar Warga</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="text-end mb-3">
            <a href="{{ route('warga.create') }}" class="btn btn-primary">Tambah Warga Baru</a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wargas as $key => $warga)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $warga->nama }}</td>
                        <td>{{ $warga->alamat }}</td>
                        <td>{{ $warga->nomor_telepon ?? '-' }}</td>
                        <td>
                            <!-- Tambahkan aksi edit dan hapus jika perlu -->
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
