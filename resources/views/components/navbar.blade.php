@php
    $isHome = Request::is('/');
@endphp

<!-- position-absolute membuat navbar melayang di atas gambar banner -->
<nav class="navbar navbar-expand-lg position-absolute top-0 start-0 w-100 z-3 py-4">
    <div class="container">
        <!-- Logo TASTY FOOD -->
        <a class="navbar-brand fw-bold text-uppercase fs-4 {{ $isHome ? 'text-dark' : 'text-white' }}" href="{{ route('home') }}">
            TASTY FOOD
        </a>

        <!-- Tombol Mobile Toggler -->
        <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navigasi -->
        <div class="collapse navbar-collapse {{ $isHome ? 'justify-content-start ms-lg-4' : 'justify-content-end' }}" id="navbarNav">
            <ul class="navbar-nav gap-4 fw-semibold text-uppercase" style="font-size: 0.85rem;">
                <li class="nav-item">
                    <a class="nav-link p-0 {{ $isHome ? 'text-dark' : 'text-white' }} {{ Request::is('/') ? 'active fw-bold' : '' }}" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 {{ $isHome ? 'text-dark' : 'text-white' }} {{ Request::is('tentang*') ? 'active fw-bold' : '' }}" href="{{ route('about') }}">TENTANG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 {{ $isHome ? 'text-dark' : 'text-white' }} {{ Request::is('berita*') ? 'active fw-bold' : '' }}" href="{{ route('news') }}">BERITA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 {{ $isHome ? 'text-dark' : 'text-white' }} {{ Request::is('galeri*') ? 'active fw-bold' : '' }}" href="{{ route('gallery') }}">GALERI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 {{ $isHome ? 'text-dark' : 'text-white' }} {{ Request::is('kontak*') ? 'active fw-bold' : '' }}" href="{{ route('contact') }}">KONTAK</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
