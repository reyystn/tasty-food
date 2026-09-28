@extends('layouts.app')

@section('content')

<!-- ============================================
    1. BANNER HEADER "GALERI KAMI"
================================================= -->
<!-- BANNER TENTANG KAMI -->
<!-- SECTION BANNER HEADER -->
<section class="position-relative d-flex align-items-center"
         style="min-height: 400px; background: url('{{ asset('images/background-tentang.jpg') }}') center/cover no-repeat;">

    <!-- Lapisan Gelap / Dark Overlay (Opacity 40%) -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.4; z-index: 1;"></div>

    <!-- Container Judul Halaman -->
    <div class="container position-relative text-white pt-5" style="z-index: 2;">
        <h1 class="display-4 fw-bold text-uppercase m-0" style="letter-spacing: 1px;">GALERI KAMI</h1>
    </div>
</section>

<!-- ============================================
    2. SECTION CAROUSEL SLIDER (BANNER ORANYE)
================================================= -->
<section class="py-5 bg-white">
    <div class="container py-lg-3">
        <!-- Container Latar Oranye -->
        <div class="bg-warning rounded-5 p-4 p-md-5 position-relative shadow-sm" style="background-color: #ff6600 !important;">

            <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center align-items-center" style="height: 350px;">
                            <img src="{{ asset('images/4-makanan.jpeg') }}" class="rounded-4 object-fit-cover shadow" style="max-height: 100%; max-width: 80%; width: 500px;" alt="Food Slide 1">
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center" style="height: 350px;">
                            <img src="{{ asset('images/soft-cookies.jpg') }}" class="rounded-4 object-fit-cover shadow" style="max-height: 100%; max-width: 80%; width: 500px;" alt="Food Slide 2">
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center" style="height: 350px;">
                            <img src="{{ asset('images/chicken-cordon-bleu.jpg') }}" class="rounded-4 object-fit-cover shadow" style="max-height: 100%; max-width: 80%; width: 500px;" alt="Food Slide 3">
                        </div>
                    </div>

                </div>

                <!-- Tombol Navigasi Kiri (Prev) -->
                <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev" style="width: 5%;">
                    <span class="bg-white text-dark rounded-circle d-flex align-items-center justify-content-center shadow" style="width: 40px; height: 40px; opacity: 1;">
                        <i class="bi bi-chevron-left fw-bold">‹</i>
                    </span>
                </button>

                <!-- Tombol Navigasi Kanan (Next) -->
                <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next" style="width: 5%;">
                    <span class="bg-white text-dark rounded-circle d-flex align-items-center justify-content-center shadow" style="width: 40px; height: 40px; opacity: 1;">
                        <i class="bi bi-chevron-right fw-bold">›</i>
                    </span>
                </button>
            </div>

        </div>d
    </div>
</section>

<!-- ============================================
    3. SECTION GRID GALERI (12 FOTO)
================================================= -->
<section class="py-5 bg-white">
    <div class="container pb-lg-5">
        <div class="row g-4">
            @php
                // Array daftar 12 gambar untuk grid galeri
                $galleryGrid = [
                    'soft-cookies.jpg',
                    'chicken-cordon-bleu.jpg',
                    'aglio-olio.jpg',
                    'matcha-latte.jpg',
                    'aglio-olio.jpg',
                    '4-makanan.jpeg',
                    'soft-cookies.jpg',
                    'chicken-cordon-bleu.jpg',
                    'matcha-latte.jpg',
                    'chicken-cordon-bleu.jpg',
                    '4-makanan.jpeg',
                    'chicken-cordon-bleu.jpg',
                ];
            @endphp

            @foreach ($galleryGrid as $img)
            <div class="col-lg-3 col-md-4 col-6">
                <div class="rounded-4 overflow-hidden shadow-sm" style="height: 220px;">
                    <img src="{{ asset('images/' . $img) }}" class="w-100 h-100 object-fit-cover" alt="Galeri">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
