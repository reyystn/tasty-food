@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <hr style="width: 60px; height: 3px; background-color: #000; opacity: 1;">
                <h1 class="display-3 fw-bold text-uppercase">Healthy<br><span class="fw-extrabold">Tasty Food</span></h1>
                <p class="text-secondary my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus.</p>
                <a href="#" class="btn btn-black text-uppercase">Tentang Kami</a>
            </div>
            <div class="col-lg-6 text-end">
                <img src="{{ asset('images/hero-plate.png') }}" alt="Hero Food" class="img-fluid" style="max-height: 480px;">
            </div>
        </div>
    </div>
</section>

<!-- TENTANG KAMI SECTION -->
<section class="py-5 bg-white text-center">
    <div class="container">
        <h3 class="fw-bold text-uppercase mb-3">Tentang Kami</h3>
        <p class="text-secondary mx-auto" style="max-width: 700px;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus.
        </p>
        <div class="d-flex justify-content-center mt-3">
            <hr style="width: 50px; height: 3px; background-color: #000; opacity: 1;">
        </div>
    </div>
</section>

<!-- BERITA KAMI SECTION -->
<section class="py-5 bg-white">
    <div class="container">
        <h3 class="fw-bold text-uppercase text-center mb-5">Berita Kami</h3>
        <div class="row g-4">
            <!-- Berita Besar Kiri -->
            <div class="col-lg-6">
                @if(isset($latestNews[0]))
                <div class="card card-custom h-100">
                    <img src="{{ asset('storage/' . $latestNews[0]->image) }}" class="card-img-top img-fluid" style="height: 320px; object-fit: cover;" alt="Big News">
                    <div class="card-body p-4 d-flex flex-column justify-content-between">
                        <div>
                            <h4 class="fw-bold text-uppercase">{{ $latestNews[0]->title }}</h4>
                            <p class="text-secondary mt-3">{{ Str::limit($latestNews[0]->content, 180) }}</p>
                        </div>
                        <a href="#" class="text-warning fw-bold text-decoration-none mt-3">Baca selengkapnya</a>
                    </div>
                </div>
                @endif
            </div>

            <!-- Grid Berita Kecil Kanan -->
            <div class="col-lg-6">
                <div class="row g-3">
                    @foreach($latestNews->skip(1)->take(4) as $news)
                    <div class="col-md-6">
                        <div class="card card-custom h-100">
                            <img src="{{ asset('storage/' . $news->image) }}" class="card-img-top" style="height: 140px; object-fit: cover;" alt="News Thumb">
                            <div class="card-body p-3 d-flex flex-column justify-content-between">
                                <div>
                                    <h6 class="fw-bold text-uppercase mb-2">{{ $news->title }}</h6>
                                    <p class="text-secondary small mb-2">{{ Str::limit($news->content, 60) }}</p>
                                </div>
                                <a href="#" class="text-warning fw-bold small text-decoration-none">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GALERI KAMI SECTION -->
<section class="py-5">
    <div class="container">
        <h3 class="fw-bold text-uppercase text-center mb-5">Galeri Kami</h3>
        <div class="row g-4">
            @foreach($galleries as $gallery)
            <div class="col-lg-4 col-md-6">
                <div class="overflow-hidden card-custom" style="height: 250px;">
                    <img src="{{ asset('storage/' . $gallery->image) }}" class="w-100 h-100 object-fit-cover" alt="Gallery Photo">
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-5">
            <a href="#" class="btn btn-black text-uppercase">Lihat Lebih Banyak</a>
        </div>
    </div>
</section>

@endsection
