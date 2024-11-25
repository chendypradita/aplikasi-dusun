@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container" style="padding-top: 100px;">
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())


                    <div class="alert alert-danger fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <h2 class="display-4 text-center text-primary mb-4 font-tebal">Selamat Datang di Halaman Aplikasi Dusun nando</h2>
            </div>
        </div>

        <!-- Carousel Section -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($posts as $key => $post)
                    <button type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="true"
                        aria-label="Slide {{ $key + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($posts as $key => $post)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        @if ($post->image)
                            <img src="{{ asset('images/posts/' . $post->image) }}" class="d-block w-100 carousel-img"
                                alt="{{ $post->title }}">
                        @else
                            <img src="https://via.placeholder.com/1200x500" class="d-block w-100 carousel-img"
                                alt="Placeholder Image">
                        @endif
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $post->title }}</h5>
                            <p>{{ Str::limit($post->body, 150) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Posts Section -->
        <div class="row mt-4">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light rounded">
                        @if ($post->image)
                            <img src="{{ asset('images/posts/' . $post->image) }}" class="card-img-top"
                                alt="{{ $post->title }}">
                        @else
                            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Placeholder Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title text-dark">{{ $post->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($post->body, 100) }}</p>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-primary btn-block">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
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
