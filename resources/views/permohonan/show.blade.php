@extends('layouts.app')

@section('title', 'Detail Permohonan Keluhan')

@section('content')
<div class="container">
    <h2 class="display-4 text-center mb-4">Detail Permohonan Keluhan</h2>

    <div class="mb-3">
        <strong>Nama Warga:</strong> {{ $permohonan->warga->nama }}
    </div>

    <div class="mb-3">
        <strong>Keluhan:</strong> {{ $permohonan->keluhan }}
    </div>

    <div class="mb-3">
        <strong>Tanggal:</strong> {{ $permohonan->created_at->format('d-m-Y') }}
    </div>

    <div class="mb-3">
        <strong>File:</strong>
        @if ($permohonan->file_path)
            <a href="{{ Storage::url($permohonan->file_path) }}" target="_blank">Unduh File</a>
        @else
            Tidak ada file
        @endif
    </div>

    <a href="{{ route('permohonan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
