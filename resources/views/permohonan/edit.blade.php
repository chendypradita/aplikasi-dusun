@extends('layouts.app')

@section('title', 'Edit Permohonan Keluhan')

@section('content')
<div class="container">
    <h2 class="display-4 text-center mb-4">Edit Permohonan Keluhan</h2>

    <form action="{{ route('permohonan.update', $permohonan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="warga_id" class="form-label">Pilih Warga</label>
            <select class="form-control @error('warga_id') is-invalid @enderror" name="warga_id" id="warga_id">
                @foreach ($wargas as $warga)
                    <option value="{{ $warga->id }}" {{ $warga->id == $permohonan->warga_id ? 'selected' : '' }}>0
                        {{ $warga->nama }}
                    </option>
                @endforeach
            </select>
            @error('warga_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="keluhan" class="form-label">Keluhan</label>
            <textarea class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" id="keluhan" rows="5">{{ old('keluhan', $permohonan->keluhan) }}</textarea>
            @error('keluhan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Permohonan</button>
    </form>

    <a href="{{ route('permohonan.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
