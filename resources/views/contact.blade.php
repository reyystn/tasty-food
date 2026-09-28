@extends('layouts.app')

@section('content')

<!-- ============================================
    1. BANNER HEADER "KONTAK KAMI"
================================================= -->
<!-- BANNER TENTANG KAMI -->
<section class="position-relative d-flex align-items-center py-5"
         style="min-height: 380px; background: url('{{ asset('images/background-tentang.jpg') }}') center/cover no-repeat;">

    <!-- Overlay Gelap Hitam Transparan (30%) -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.3; z-index: 1;"></div>

    <!-- Teks Judul -->
    <div class="container position-relative text-white" style="z-index: 2;">
        <h1 class="display-4 fw-extrabold text-uppercase m-0">KONTAK KAMI</h1>
    </div>
</section>

<!-- ============================================
    2. SECTION FORM KONTAK & INFORMASI
================================================= -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <h3 class="fw-bold text-uppercase mb-4 fs-3">KONTAK KAMI</h3>

        <!-- Form Kirim Pesan -->
        <form action="#" method="POST">
            @csrf
            <div class="row g-4 mb-4">
                <!-- Kolom Kiri: Input Text -->
                <div class="col-lg-6 d-flex flex-column gap-3">
                    <input type="text" name="subject" class="form-control p-3 rounded-3 border-dark-subtle" placeholder="Subject" style="border-width: 1.5px;">
                    <input type="text" name="name" class="form-control p-3 rounded-3 border-dark-subtle" placeholder="Name" style="border-width: 1.5px;">
                    <input type="email" name="email" class="form-control p-3 rounded-3 border-dark-subtle" placeholder="Email" style="border-width: 1.5px;">
                </div>

                <!-- Kolom Kanan: Textarea Message -->
                <div class="col-lg-6">
                    <textarea name="message" class="form-control p-3 rounded-3 border-dark-subtle h-100" rows="5" placeholder="Message" style="border-width: 1.5px; resize: none;"></textarea>
                </div>
            </div>

            <!-- Tombol Kirim Hitam Panjang -->
            <button type="submit" class="btn btn-dark w-100 py-3 rounded-3 text-uppercase fw-bold mb-5" style="letter-spacing: 1px;">
                KIRIM
            </button>
        </form>

        <!-- 3 Ikon Info Kontak -->
        <div class="row text-center pt-4 g-4">
            <!-- Email -->
            <div class="col-md-4">
                <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px;">
                    <i class="bi bi-envelope-fill fs-3">✉</i>
                </div>
                <h6 class="fw-bold text-uppercase mb-1">EMAIL</h6>
                <p class="text-muted small mb-0">tastyfood@gmail.com</p>
            </div>

            <!-- Phone -->
            <div class="col-md-4">
                <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px;">
                    <i class="bi bi-telephone-fill fs-3">📞</i>
                </div>
                <h6 class="fw-bold text-uppercase mb-1">PHONE</h6>
                <p class="text-muted small mb-0">+62 812 3456 7890</p>
            </div>

            <!-- Location -->
            <div class="col-md-4">
                <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px;">
                    <i class="bi bi-geo-alt-fill fs-3">📍</i>
                </div>
                <h6 class="fw-bold text-uppercase mb-1">LOCATION</h6>
                <p class="text-muted small mb-0">Kota Bandung, Jawa Barat</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
    3. SECTION GOOGLE MAPS EMBED
================================================= -->
<section class="py-5" style="background-color: #fafafa;">
    <div class="container">
        <div class="rounded-4 overflow-hidden shadow-sm" style="height: 380px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d107.5731165!3d-6.9034443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x1030bfb6a00f100!2sBandung%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

@endsection
