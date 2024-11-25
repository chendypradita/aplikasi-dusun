@extends('layouts.app')

@section('title', 'Kirim Keluhan')

@section('content')
<div class="container">
    <h2 class="display-4 text-center mb-4">Kirim Keluhan</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('permohonan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="warga_id" class="form-label">Pilih Warga</label>
            <select class="form-control @error('warga_id') is-invalid @enderror" name="warga_id" id="warga_id">
                <option value="">Pilih Warga</option>
                @foreach ($wargas as $warga)
                    <option value="{{ $warga->id }}" {{ old('warga_id') == $warga->id ? 'selected' : '' }}>
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
            <textarea class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" id="keluhan" rows="5">{{ old('keluhan') }}</textarea>
            @error('keluhan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Kirim Keluhan</button>
    </form>
</div>
@endsection
