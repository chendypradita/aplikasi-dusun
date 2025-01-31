@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-top: 50px;">
            <h2>Tentang Kami</h2>

            <p>Selamat datang di situs kami! Kami adalah tim profesional yang berdedikasi dengan semangat memberikan layanan berkualitas tinggi kepada klien kami. Misi kami adalah untuk memberikan nilai yang luar biasa, solusi inovatif, dan pengalaman pengguna yang tak tertandingi.</p>

            <h3>Misi Kami</h3>
            <p>Di inti dari kami, kami bertujuan untuk:</p>
            <ul>
                <li>Memberikan solusi yang handal dan skalabel untuk tantangan yang dihadapi klien kami.</li>
                <li>Terus berinovasi untuk tetap unggul di industri yang terus berubah.</li>
                <li>Memprioritaskan pendekatan yang berfokus pada pelanggan, memastikan setiap solusi disesuaikan dengan kebutuhan unik klien kami.</li>
            </ul>

            <h3>Visi Kami</h3>
            <p>Kami membayangkan sebuah dunia di mana bisnis dan individu dapat mengandalkan teknologi untuk menyederhanakan hidup mereka dan meningkatkan produktivitas. Tujuan kami adalah menjadi mitra terpercaya dalam transformasi ini.</p>

            <h3>Nilai-Nilai Kami</h3>
            <p>Pekerjaan kami didorong oleh nilai-nilai inti yang mendefinisikan siapa kami dan bagaimana kami berinteraksi dengan dunia:</p>
            <ul>
                <li><strong>Integritas:</strong> Kami melakukan hal yang benar, meskipun tidak ada yang melihat.</li>
                <li><strong>Inovasi:</strong> Kami menerima perubahan dan secara aktif mengejar cara-cara baru untuk memperbaiki diri.</li>
                <li><strong>Kolaborasi:</strong> Kami bekerja bersama untuk mencapai kesuksesan yang lebih besar.</li>
                <li><strong>Kepuasan Pelanggan:</strong> Kami mengutamakan kebutuhan dan tujuan klien kami.</li>
                <li><strong>Keunggulan:</strong> Kami memberikan hasil kerja berkualitas tinggi yang melebihi harapan.</li>
            </ul>

            <h3>Tim Kami</h3>
            <p>Tim kami terdiri dari profesional yang penuh semangat, terampil, dan berpengalaman. Setiap anggota tim membawa keahlian unik, dan bersama-sama kami membuat perbedaan.</p>
            <p>Tim kepemimpinan kami terdiri dari:</p>
            <ul>
                <li><strong>John Doe</strong> - CEO & Pendiri</li>
                <li><strong>Jane Smith</strong> - CTO & Co-Pendiri</li>
                <li><strong>Michael Brown</strong> - Direktur Operasional</li>
                <li><strong>Emily Johnson</strong> - Pengembang Utama</li>
                <li><strong>David Wilson</strong> - Manajer Pemasaran</li>
            </ul>

            <h3>Apa yang Kami Lakukan</h3>
            <p>Kami mengkhususkan diri dalam memberikan berbagai layanan yang dirancang untuk membantu bisnis dan individu menyelesaikan tantangan yang kompleks, termasuk:</p>
            <ul>
                <li><strong>Pengembangan Web:</strong> Membangun situs web yang modern, responsif, dan fungsional.</li>
                <li><strong>Pengembangan Aplikasi Mobile:</strong> Membuat aplikasi mobile yang ramah pengguna.</li>
                <li><strong>Konsultasi & Strategi:</strong> Membantu bisnis mengoptimalkan proses dan mencapai kesuksesan jangka panjang.</li>
                <li><strong>Desain & Branding:</strong> Menciptakan merek yang unik dan pengalaman yang tak terlupakan.</li>
                <li><strong>Layanan Cloud:</strong> Menerapkan solusi cloud yang skalabel untuk meningkatkan efisiensi.</li>
            </ul>

            <h3>Sejarah Kami</h3>
            <p>Didirikan pada tahun 2010, kami memulai sebagai startup kecil dengan visi untuk berinovasi dan menyederhanakan teknologi bagi bisnis dari segala ukuran. Selama bertahun-tahun, kami tumbuh menjadi penyedia solusi terkemuka yang melayani klien di berbagai industri di seluruh dunia.</p>

            <h3>Prestasi Kami</h3>
            <ul>
                <li>Dinobatkan sebagai "Startup Teknologi Terbaik" pada tahun 2015 oleh Majalah XYZ.</li>
                <li>Berhasil membantu lebih dari 500 perusahaan dalam mentransformasi kehadiran digital mereka.</li>
                <li>Meluncurkan lebih dari 100 aplikasi mobile yang diunduh lebih dari 10 juta kali di seluruh dunia.</li>
                <li>Diakui sebagai salah satu dari 100 perusahaan inovatif terbaik di industri teknologi pada tahun 2020.</li>
            </ul>

            <h3>Hubungi Kami</h3>
            <p>Jika Anda ingin mengetahui lebih lanjut tentang layanan kami atau ingin mendiskusikan sebuah proyek, silakan hubungi kami:</p>
            <ul>
                <li><strong>Email:</strong> info@perusahaan-kami.com</li>
                <li><strong>Telepon:</strong> +1 (555) 123-4567</li>
                <li><strong>Alamat:</strong> Jl. Inovasi No. 1234, Suite 500, Kota Teknologi, Indonesia</li>
            </ul>

            <p>Terima kasih telah mengunjungi situs kami. Kami berharap dapat bekerja sama dengan Anda dan meraih kesuksesan bersama!</p>
        </div>
    </div>
</div>


<style>


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
</style>
@endsection
