@extends('layouts.app')

@section('content')

<!-- ============================================
    1. BANNER HEADER "TENTANG KAMI"
================================================= -->
<!-- BANNER TENTANG KAMI -->
<!-- SECTION BANNER HEADER -->
<section class="position-relative d-flex align-items-center"
         style="min-height: 400px; background: url('{{ asset('images/background-tentang.jpg') }}') center/cover no-repeat;">

    <!-- Lapisan Gelap / Dark Overlay (Opacity 40%) -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.4; z-index: 1;"></div>

    <!-- Container Judul Halaman -->
    <div class="container position-relative text-white pt-5" style="z-index: 2;">
        <h1 class="display-4 fw-bold text-uppercase m-0" style="letter-spacing: 1px;">TENTANG KAMI</h1>
    </div>
</section>
<!-- ============================================
    2. SECTION TASTY FOOD (DESKRIPSI UTAMA)
================================================= -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <!-- Teks Kiri -->
            <div class="col-lg-6">
                <h3 class="fw-bold text-uppercase mb-4 fs-2">TASTY FOOD</h3>
                <p class="text-secondary fw-bold mb-3" style="font-size: 0.95rem; line-height: 1.8;">
                    Tasty Food adalah restoran yang menyajikan hidangan lezat dengan bahan berkualitas tinggi dan pelayanan yang ramah. Kami berkomitmen untuk memberikan pengalaman makan yang tak terlupakan bagi setiap pelanggan.
                </p>
                <p class="text-secondary small mb-0" style="font-size: 0.88rem; line-height: 1.8;">
                    Dengan atmosfer yang nyaman dan suasana yang hangat, Tasty Food menjadi pilihan tepat untuk menikmati hidangan lezat bersama keluarga dan teman-teman.
                </p>
            </div>

            <!-- 2 Foto Kanan -->
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="rounded-4 overflow-hidden shadow-sm" style="height: 320px;">
                            <img src="{{ asset('images/soft-cookies.jpg') }}" alt="Tasty Food" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="rounded-4 overflow-hidden shadow-sm" style="height: 320px;">
                            <img src="{{ asset('images/chicken-cordon-bleu.jpg') }}" alt="Chef Cooking" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
    3. SECTION VISI
================================================= -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <!-- 2 Foto Kiri -->
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="rounded-4 overflow-hidden shadow-sm" style="height: 250px;">
                            <img src="{{ asset('images/aglio-olio.jpg') }}" alt="Food Visi" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="rounded-4 overflow-hidden shadow-sm" style="height: 250px;">
                            <img src="{{ asset('images/matcha-latte.jpg') }}" alt="Food Visi" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Teks Visi Kanan -->
            <div class="col-lg-6 order-1 order-lg-2">
                <h3 class="fw-bold text-uppercase mb-3 fs-2">VISI</h3>
                <p class="text-secondary small" style="font-size: 0.88rem; line-height: 1.8;">
                    Tasty Food bertujuan untuk menjadi restoran yang dikenal luas karena kualitas makanan yang lezat, pelayanan yang ramah, dan pengalaman bersantap yang tak terlupakan. Kami berkomitmen untuk terus berinovasi dalam menyajikan hidangan yang memuaskan selera pelanggan kami.
        </div>
    </div>
</section>

<!-- ============================================
    4. SECTION MISI
================================================= -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <!-- Teks Misi Kiri -->
            <div class="col-lg-6">
                <h3 class="fw-bold text-uppercase mb-3 fs-2">MISI</h3>
                <p class="text-secondary small" style="font-size: 0.88rem; line-height: 1.8;">
                    Tasty Food berkomitmen untuk menyediakan makanan berkualitas tinggi, pelayanan yang ramah, dan suasana yang nyaman bagi pelanggan kami. Kami terus berusaha meningkatkan pengalaman berbelanja dan makan di restoran kami.
                </p>
            </div>

            <!-- 1 Foto Lebar Kanan -->
            <div class="col-lg-6">
                <div class="rounded-4 overflow-hidden shadow-sm" style="height: 250px;">
                    <img src="{{ asset('images/4-makanan.jpeg') }}" alt="Ingredients" class="w-100 h-100 object-fit-cover">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
