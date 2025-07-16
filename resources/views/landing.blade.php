<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Eskul NepalTV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <style>
        .hero {
            background: linear-gradient(to right, #004e92, #000428);
            color: white;
            padding: 100px 20px;
            text-align: center;
        }
        .section-title {
            margin-top: 60px;
            margin-bottom: 30px;
        }
        footer {
            background-color: #000428;
            color: white;
            padding: 40px 0;
        }
    </style>
</head>
<body>

@extends('layouts.app')

@section('content')

    <!-- HERO SECTION -->
    <div class="hero">
        <h1>Selamat Datang di Website Eskul NepalTV</h1>
        <p>Tempat pencatatan anggota ekstrakurikuler yang rapi dan efisien.</p>
        <a href="{{ route('daftar') }}" class="btn btn-light btn-lg mt-3">Daftar Sekarang</a>
    </div>

    <!-- TENTANG KAMI -->
    <div class="container text-center">
        <h2 class="section-title">Tentang Kami</h2>
        <p class="lead">Eskul NepalTV adalah ekstrakurikuler kreatif di bidang media dan televisi sekolah. Kami mewadahi siswa yang ingin belajar dunia produksi konten, penyiaran, dokumentasi, dan lainnya.</p>
    </div>

    <!-- FITUR / KEUNGGULAN -->
    <div class="container text-center">
        <h2 class="section-title">Kenapa Gabung NepalTV?</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Belajar Langsung Produksi</h5>
                        <p class="card-text">Mulai dari naskah, kamera, editing hingga publikasi. Semua diajarkan langsung dari praktisi dan alumni.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Relasi & Tim Solid</h5>
                        <p class="card-text">Bekerja dalam tim membuatmu belajar kerja sama, kepemimpinan, dan manajemen waktu.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Portofolio & Karya Nyata</h5>
                        <p class="card-text">Buktikan kreativitasmu melalui karya video, dokumentasi, dan siaran langsung di kegiatan sekolah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- GALERI -->
    <div class="container text-center mt-5">
        <h2 class="section-title">Galeri Kegiatan</h2>
        <div class="row g-3">
            <div class="col-md-4"><img src="https://via.placeholder.com/300x200" class="img-fluid rounded" alt="Kegiatan 1"></div>
            <div class="col-md-4"><img src="https://via.placeholder.com/300x200" class="img-fluid rounded" alt="Kegiatan 2"></div>
            <div class="col-md-4"><img src="https://via.placeholder.com/300x200" class="img-fluid rounded" alt="Kegiatan 3"></div>
        </div>
    </div>

    <!-- TESTIMONI -->
    <div class="container text-center mt-5 mb-5">
        <h2 class="section-title">Apa Kata Alumni?</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <blockquote class="blockquote">
                    <p class="mb-0">"NepalTV mengubah cara saya memandang dunia kreatif. Dari pemalu, saya jadi percaya diri berbicara di depan kamera."</p>
                    <footer class="blockquote-footer">Andhika, Alumni NepalTV 2023</footer>
                </blockquote>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; 2025 NepalTV Eskul. All rights reserved.</p>
            <p>Kontak: <a href="mailto:nepaltv@example.com" class="text-white">nepaltv@example.com</a> | Instagram: <a href="#" class="text-white">@nepaltv_official</a></p>
        </div>
    </footer>

    @endsection

</body>
</html>
