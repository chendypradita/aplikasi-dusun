@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-top: 100px;">
            <h2>Profile</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <p>Ini adalah halaman profile</p>
        </div>
    </div>
</div>
<style>
    .font-tebal {
        font-weight: bold;
    }

    /* Carousel Styling */
    .carousel-img {
        height: 500px;
        object-fit: cover;
        /* Menjaga proporsi gambar dan memastikan gambar tidak terdistorsi */
        width: 1200px;
        /* Menyesuaikan lebar gambar */
        margin: 0 auto;
        /* Menyelaraskan gambar ke tengah */
    }

    /* Card Styling */
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        height: 100%;
        /* Menjamin semua kartu memiliki tinggi konsisten */
        display: flex;
        flex-direction: column;
        /* Agar konten teratur secara vertikal */
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        border-radius: 10px 10px 0 0;
        object-fit: cover;
        height: 200px;
    }

    .card-body {
        flex: 1;
        /* Membuat card-body fleksibel agar tinggi seragam */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* Ruang antara konten dan tombol */
    }

    .card-text {
        flex: 1;
        /* Memberikan ruang fleksibel pada teks */
        font-size: 0.9rem;
        margin-bottom: 10px;
        /* Memberikan jarak kecil di bawah teks */
        overflow: hidden;
        text-overflow: ellipsis;
        /* Memastikan teks panjang tidak overflow */
        white-space: wrap;
        /* Membuat teks sesuai ukuran kartu */
    }

    .btn-block {
        margin-top: auto;
        /* Menyelaraskan tombol di bagian bawah */
    }
</style>
@endsection
