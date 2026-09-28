@extends('layouts.app')

@section('content')

<!-- ============================================
    1. HERO SECTION (HEALTHY TASTY FOOD)
================================================= -->
<style>
    .hero-section {
        min-height: 520px;
        background-color: #f8f9fa; /* Latar belakang abu-abu terang */
        position: relative;
        overflow: hidden; /* Memotong piring yang keluar dari batas layar */
    }

    .img-hero-plate {
        position: absolute;
        top: 50%;
        right: -140px; /* Nilai negatif untuk menggeser piring ke luar kanan layar */
        transform: translateY(-50%);
        width: 620px; /* Ukuran piring besar */
        height: auto;
        max-width: none !important;
        z-index: 2;
        filter: drop-shadow(0px 15px 25px rgba(0, 0, 0, 0.15)); /* Bayangan lembut di bawah piring */
    }

    .btn-black {
        background-color: #000000;
        color: #ffffff;
        font-weight: 700;
        padding: 12px 32px;
        border-radius: 0;
        border: none;
        letter-spacing: 1px;
    }
    .btn-black:hover {
        background-color: #333333;
        color: #ffffff;
    }
</style>

<section class="hero-section py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center">

            <!-- Kolom Teks (Kiri) -->
            <div class="col-lg-6 z-3 position-relative">
                <hr style="width: 50px; height: 3px; background-color: #000; opacity: 1; border: none;" class="mb-4">
                <h1 class="display-3 fw-bold text-uppercase lh-sm mb-3">
                    HEALTHY<br>
                    <span class="fw-extrabold">TASTY FOOD</span>
                </h1>
                <p class="text-secondary my-4 pe-lg-5" style="font-size: 0.95rem; line-height: 1.8;">
                    Tasty Food adalah restoran yang menyajikan makanan sehat dan lezat dengan bahan-bahan berkualitas tinggi. Kami berkomitmen untuk memberikan pengalaman kuliner yang tak terlupakan bagi setiap pelanggan kami.
                </p>
                <a href="#" class="btn btn-black text-uppercase">TENTANG KAMI</a>
            </div>

            <!-- Kolom Gambar Piring Menyembul (Kanan) -->
            <div class="col-lg-6 d-none d-lg-block position-relative">
                <img src="{{ asset('images/img-1.png') }}" alt="Tasty Food Plate" class="img-hero-plate">
            </div>

        </div>
    </div>
</section>

<!-- ============================================
    2. SECTION TENTANG KAMI
================================================= -->
<section class="py-5 bg-white text-center">
    <div class="container">
        <h3 class="fw-bold text-uppercase mb-3">TENTANG KAMI</h3>
        <p class="text-secondary mx-auto mb-4" style="max-width: 750px; font-size: 0.95rem; line-height: 1.8;">
           Di Restoran ini kami menyediakan berbagai macam menu makanan sehat dan lezat yang dibuat dengan bahan-bahan berkualitas tinggi. Kami berkomitmen untuk memberikan pengalaman kuliner yang tak terlupakan bagi setiap pelanggan kami.
        </p>
        <div class="d-flex justify-content-center">
            <hr style="width: 50px; height: 3px; background-color: #000; opacity: 1; border: none; margin: 0;">
        </div>
    </div>
</section>

<!-- ============================================
    3. SECTION 4 KARTU UNGGULAN (BACKGROUND PANIFICO)
================================================= -->
<section class="py-5 position-relative" style="background: url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=1400') center/cover no-repeat;">
    <!-- Overlay Gelap -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

    <div class="container position-relative z-1 py-4">
        <div class="row g-4 justify-content-center">
            @php
                $features = [
                    ['title' => 'Soft Cookies', 'img' => 'soft-cookies.jpg'],
                    ['title' => 'Chicken Cordon Bleu', 'img' => 'chicken-cordon-bleu.jpg'],
                    ['title' => 'Aglio Olio', 'img' => 'aglio-olio.jpg'],
                    ['title' => 'Matcha Latte', 'img' => 'matcha-latte.jpg'],
                ];
            @endphp

            @foreach ($features as $item)
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 rounded-4 shadow-sm text-center p-3 h-100 position-relative mt-4">
                    <!-- Lingkaran Foto Menyembul -->
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <div class="rounded-circle overflow-hidden border border-3 border-white shadow-sm" style="width: 100px; height: 100px;">

                            <!-- PERBAIKAN DI BARIS INI: Tambahkan asset('images/' . ...) -->
                            <img src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['title'] }}" class="w-100 h-100 object-fit-cover">

                        </div>
                    </div>
                    <!-- Konten Kartu -->
                    <div class="card-body pt-5 mt-2">
                        <h5 class="fw-bold text-uppercase mb-2 mt-2" style="font-size: 1.1rem;">{{ $item['title'] }}</h5>
                        <p class="text-secondary small mb-0" style="font-size: 0.82rem; line-height: 1.6;">
                          Menu Best Seller yang kami sediakan selalu fresh dan lezat, dibuat dengan bahan-bahan berkualitas tinggi untuk memberikan pengalaman kuliner yang tak terlupakan bagi setiap pelanggan kami.
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ============================================
    4. SECTION BERITA KAMI / PROMO KAMI
================================================= -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <h3 class="fw-bold text-uppercase text-center mb-5">PROMO KAMI</h3>

        <div class="row g-4">
            <!-- Berita Utama Besar (Kiri) -->
            <div class="col-lg-6">
                <div class="card card-custom h-100 border-0 shadow-sm overflow-hidden rounded-4">

                    <!-- GAMBAR UTAMA BESAR DARI public/images/ -->
                    <img src="{{ asset('images/4-makanan.jpeg') }}" class="card-img-top w-100" style="height: 300px; object-fit: cover;" alt="Promo Merdeka">

                    <div class="card-body p-4 d-flex flex-column justify-content-between">
                        <div>
                            <h4 class="fw-bold text-uppercase mb-3">Promo Merdeka! Nikmati Diskon Spesial 17% Untuk Semua Menu Favorit</h4>
                            <p class="text-secondary small" style="line-height: 1.7;">
                                Dalam rangka menyambut Hari Kemerdekaan Republik Indonesia, Tasty Food menghadirkan penawaran istimewa untuk Anda. Dapatkan diskon 17% dan kejutan menu spesial merah putih selama bulan Agustus.
                            </p>
                        </div>
                        <a href="#" class="text-warning fw-bold text-decoration-none small mt-3">Baca selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Grid 4 Berita Kecil (Kanan) -->
            <div class="col-lg-6">
                <div class="row g-3">

                    @php
                        // Daftar nama gambar kecil dari folder public/images/
                        $promoKecil = [
                            'nasi gudeg.jpg',
                            'sop-iga.jpg',
                            'aglio-olio.jpg',
                            'matcha-latte.jpg'
                        ];
                    @endphp

                    @foreach ($promoKecil as $imgName)
                    <div class="col-md-6">
                        <div class="card card-custom h-100 border-0 shadow-sm overflow-hidden rounded-4">

                            <!-- GAMBAR KECIL DARI public/images/ -->
                            <img src="{{ asset('images/' . $imgName) }}" class="card-img-top w-100" style="height: 130px; object-fit: cover;" alt="Promo">

                            <div class="card-body p-3 d-flex flex-column justify-content-between">
                                <div>
                                    <h6 class="fw-bold text-uppercase mb-2" style="font-size: 0.9rem;">LOREM IPSUM</h6>
                                    <p class="text-secondary small mb-2" style="font-size: 0.78rem;">
                                      Dapatkan diskon 17% dan kejutan menu spesial merah putih selama bulan Agustus.
                            </p>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="text-warning fw-bold small text-decoration-none" style="font-size: 0.75rem;">Baca selengkapnya</a>
                                    <span class="text-muted small">•••</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
    5. SECTION GALERI KAMI
================================================= -->
<section class="py-5">
    <div class="container py-4">
        <h3 class="fw-bold text-uppercase text-center mb-5">GALERI KAMI</h3>

        <div class="row g-4">
            @php
                $galleryPhotos = [
                    'https://images.unsplash.com/photo-1540420773420-3366772f4999?w=600',
                    'https://images.unsplash.com/photo-1467003909585-2f8a72700288?w=600',
                    'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=600',
                    'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600',
                    'https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=600',
                    'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=600',
                ];
            @endphp

            @foreach ($galleryPhotos as $photo)
            <div class="col-lg-4 col-md-6">
                <div class="card-custom overflow-hidden" style="height: 260px;">
                    <img src="{{ $photo }}" class="w-100 h-100 object-fit-cover" alt="Galeri">
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn btn-black text-uppercase">LIHAT LEBIH BANYAK</a>
        </div>
    </div>
</section>

@endsection
