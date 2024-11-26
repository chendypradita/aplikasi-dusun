@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-top: 100px;">
            <h2>Kontak Kami</h2>

            <p>Terima kasih telah mengunjungi halaman kontak kami. Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami. Kami senang mendengar dari Anda!</p>

            <h3>Informasi Kontak</h3>
            <p>Berikut adalah beberapa cara untuk menghubungi kami:</p>

            <ul>
                <li><strong>Email:</strong> <a href="mailto:info@perusahaan-kami.com">info@perusahaan-kami.com</a></li>
                <li><strong>Telepon:</strong> +1 (555) 123-4567</li>
                <li><strong>Alamat:</strong> Jl. Inovasi No. 1234, Suite 500, Kota Teknologi, Indonesia</li>
            </ul>

            <h3>Formulir Kontak</h3>
            <p>Isi formulir di bawah ini untuk mengirim pesan kepada kami:</p>


                <div class="form-group">
                    <label for="name">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Pesan:</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>

{{-- CSS --}}
<style>



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
</style>
@endsection
