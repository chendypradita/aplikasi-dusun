@extends('layouts.app')


@section('title', 'Profile')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Profile Card Section -->
        <div class="col-md-8" style="padding-top: 80px;">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-gradient-primary text-white text-center">
                    <h4 class="mb-0">Profile Saya</h4>
                </div>
                <div class="card-body">
                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif


                    <div class="row align-items-center">
                        <!-- Profile Picture -->
                        <div class="col-md-4 text-center">
                            <img src="{{ auth()->user()->profile_picture_url ?? 'https://i.pinimg.com/736x/4f/c7/4b/4fc74b0567a6de8369479c14746c2216.jpg' }}" alt="Profile Picture" class="img-fluid rounded-circle profile-img">
                        </div>

                        <!-- Profile Info -->
                        <div class="col-md-8">
                            <h3 class="font-weight-bold text-dark">{{ auth()->user()->name }}</h3>
                            <p class="text-muted">{{ auth()->user()->email }}</p>
                            <hr>
                            <p>Selamat datang di halaman profil Anda! Di sini, Anda dapat memperbarui informasi pribadi dan mengelola pengaturan akun Anda.</p>
                            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Custom CSS -->
<style>
    /* Card Styling */
    .card {
        border-radius: 20px;
        overflow: hidden;
    }


    .card-header {
        background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
        border-bottom: none;
        padding: 30px;
    }


    .card-body {
        padding: 40px;
        background-color: #f9f9f9;
    }


    /* Profile Image */
    .profile-img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border: 5px solid #fff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }


    /* Name and Text Styling */
    h3 {
        font-size: 1.9rem;
        color: #333;
        font-weight: 600;
    }


    p {
        font-size: 1.1rem;
        color: #777;
        line-height: 1.6;
    }


    .text-muted {
        font-size: 1rem;
        color: #888;
    }


    /* Button Styling */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 12px 30px;
        font-size: 1.1rem;
        border-radius: 25px;
    }


    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }


    /* Responsive Profile Layout */
    @media (max-width: 768px) {
        .card-body {
            padding: 30px;
        }


        .col-md-8, .col-md-4 {
            text-align: center;
        }


        .col-md-4 {
            margin-bottom: 20px;
        }


        img {
            width: 120px;
            height: 120px;
        }
    }
</style>


@endsection
