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
    <a href="{{ route('permohonan.create') }}" class="btn btn-primary">Adukan Keluhan</a>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Warga</th>
                    <th>Keluhan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permohonans as $permohonan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $permohonan->warga->nama }}</td>
                        <td>{{ $permohonan->keluhan }}</td>
                        <td>{{ $permohonan->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
