@extends('layouts.app')

@section('content')

<!-- ============================================
    1. BANNER HEADER "BERITA KAMI"
================================================= -->
<!-- BANNER TENTANG KAMI -->
<!-- SECTION BANNER HEADER -->
<section class="position-relative d-flex align-items-center"
         style="min-height: 400px; background: url('{{ asset('images/background-tentang.jpg') }}') center/cover no-repeat;">

    <!-- Lapisan Gelap / Dark Overlay (Opacity 40%) -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.4; z-index: 1;"></div>

    <!-- Container Judul Halaman -->
    <div class="container position-relative text-white pt-5" style="z-index: 2;">
        <h1 class="display-4 fw-bold text-uppercase m-0" style="letter-spacing: 1px;">BERITA KAMI</h1>
    </div>
</section>
<!-- ============================================
    2. SECTION BERITA UTAMA (HEADLINE)
================================================= -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <!-- Foto Besar Kiri -->
            <div class="col-lg-6">
                <div class="rounded-4 overflow-hidden shadow-sm" style="height: 380px;">
                    <img src="{{ asset('images/4-makanan.jpeg') }}" alt="Makanan Khas Nusantara" class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <!-- Teks Deskripsi Kanan -->
            <div class="col-lg-6">
                <h3 class="fw-bold text-uppercase mb-3 fs-2">APA SAJA MAKANAN KHAS NUSANTARA?</h3>

                <p class="text-secondary small mb-3" style="font-size: 0.88rem; line-height: 1.8;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.
                </p>
                <p class="text-secondary small mb-4" style="font-size: 0.88rem; line-height: 1.8;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.
                </p>

                <!-- Tombol Hitam Baca Selengkapnya -->
                <a href="#" class="btn btn-dark rounded-0 px-4 py-2 text-uppercase fw-bold" style="font-size: 0.8rem; letter-spacing: 1px;">
                    BACA SELENGKAPNYA
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
    3. SECTION BERITA LAINNYA (GRID 8 KARTU)
================================================= -->
<section class="py-5" style="background-color: #fafafa;">
    <div class="container py-lg-3">
        <!-- Judul Section -->
        <h3 class="fw-bold text-uppercase mb-4 fs-3">BERITA LAINNYA</h3>

        <!-- Grid 8 Kartu (2 Baris x 4 Kolom) -->
        <div class="row g-4">
            @php
                // Array berisi daftar nama gambar untuk 8 kartu berita
                $newsGrid = [
                    'soft-cookies.jpg',
                    'chicken-cordon-bleu.jpg',
                    'aglio-olio.jpg',
                    'matcha-latte.jpg',
                    'soft-cookies.jpg',
                    'chicken-cordon-bleu.jpg',
                    'aglio-olio.jpg',
                    'matcha-latte.jpg',
                ];
            @endphp

            @foreach ($newsGrid as $img)
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 rounded-4 shadow-sm h-100 overflow-hidden">
                    <!-- Gambar Kartu -->
                    <div style="height: 160px;">
                        <img src="{{ asset('images/' . $img) }}" class="card-img-top w-100 h-100 object-fit-cover" alt="Berita">
                    </div>

                    <!-- Isi Konten Kartu -->
                    <div class="card-body p-3 d-flex flex-column justify-content-between">
                        <div>
                            <h6 class="fw-bold text-uppercase mb-2" style="font-size: 0.95rem;">LOREM IPSUM</h6>
                            <p class="text-secondary small mb-3" style="font-size: 0.8rem; line-height: 1.5;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                            </p>
                        </div>

                        <!-- Footer Kartu: Link & Titik Tiga -->
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-warning fw-bold text-decoration-none" style="font-size: 0.78rem;">
                                baca selengkapnya
                            </a>
                            <span class="text-muted small">•••</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
