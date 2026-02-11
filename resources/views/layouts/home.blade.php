@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Content Container -->
<div class="content-container">

    <!-- Header Section -->
    <div class="header-section">
        <div class="header">
            <div class="greeting">
                <h1>Halo, Pak/Bu {{ Auth::user()->name }}!</h1>
                <p>Let's start learning</p>
            </div>
            
            <div class="blue-bar">
                <div class="baca-juga">
                    <i class="fas fa-book-open"></i>
                    <span>Baca juga: Gemini Academy</span>
                </div>
                <a href="{{ route('coursegemini.index') }}" class="lihat-materi">Lihat Materi</a>
            </div>
        </div>
    </div>

    <!-- Carousel Section -->
    <div class="carousel-container">
        <div class="carousel">
            <div class="carousel-slides" id="carouselSlides">
                <!-- Slide 1: PPG -->
                <div class="carousel-slide">
                    <div class="slide-content ppg-slide">
                        <i class="fas fa-graduation-cap slide-icon"></i>
                        <h3>Pembelajaran Mendalam dan Asesmen (SMK)</h3>
                        <p>Membahas model dan konteks pembelajaran di SMK serta mata pelajaran PKL.</p>
                        <a href="{{ route('mycourse') }}#ppg" class="slide-btn">Jelajahi PPG</a>
                    </div>
                </div>
                
                <!-- Slide 2: PKL -->
                <div class="carousel-slide">
                    <div class="slide-content pkl-slide">
                        <i class="fas fa-briefcase slide-icon"></i>
                        <h3>Praktik Kerja Lapangan</h3>
                        <p>Isi dari Modul ini adalah sebuah dokumentasi beberapa file terkait pembekalan PKL di SMK TI BAZMA</p>
                        <a href="{{ route('mycourse') }}#pkl" class="slide-btn">Jelajahi PKL</a>
                    </div>
                </div>
                
                <!-- Slide 3: Self Development -->
                <div class="carousel-slide">
                    <div class="slide-content selfdev-slide">
                        <i class="fas fa-brain slide-icon"></i>
                        <h3>Landasan Pemahaman</h3>
                        <p>Memahami konsep dasar pengembangan diri melalui refleksi, kesadaran diri, dan perencanaan pengembangan potensi secara berkelanjutan.</p>
                        <a href="{{ route('mycourse') }}#self-dev" class="slide-btn">Jelajahi Self Dev</a>
                    </div>
                </div>
                
                <!-- Slide 4: Additional Training -->
                <div class="carousel-slide">
                    <div class="slide-content addtrain-slide">
                        <i class="fas fa-puzzle-piece slide-icon"></i>
                        <h3>Key Performance Indicators</h3>
                        <p>Materi ini bertujuan untuk membekali tenaga pendidik dan kependidikan dengan pemahaman tentang konsep, urgensi, dan penerapan Key Performance Indicators (KPI).</p>
                        <a href="{{ route('mycourse') }}#add-train" class="slide-btn">Jelajahi Add Train</a>
                    </div>
                </div>
            </div>
            
            <button class="carousel-btn prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="carousel-btn next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- Highlight Course -->
<div class="highlight-course">
    <div class="highlight-left">
        <div class="highlight-icon">
            <i class="fas fa-book-open"></i>
        </div>
        <div class="highlight-text">
            <small>Baca juga :</small>
            <h4>Gemini Academy</h4>
        </div>
    </div>

    <div class="highlight-right">
        <a href="{{ route('coursegemini.index') }}" class="highlight-btn">
            Lihat Materi
        </a>
    </div>
</div>

    <!-- Categories Section -->
    <div class="categories-section">
        <h2 class="categories-title">Eksplorasi Kategori:</h2>
        
        <div class="category-icons">
            <a href="{{ route('mycourse') }}#ppg" class="category">
                <div class="category-icon ppg-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <span>PPG</span>
            </a>
            
            <a href="{{ route('mycourse') }}#pkl" class="category">
                <div class="category-icon pkl-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <span>PKL</span>
            </a>
            
            <a href="{{ route('mycourse') }}#self-dev" class="category">
                <div class="category-icon selfdev-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <span>Self Dev</span>
            </a>
            
            <a href="{{ route('mycourse') }}#add-train" class="category">
                <div class="category-icon addtrain-icon">
                    <i class="fas fa-puzzle-piece"></i>
                </div>
                <span>Add Train</span>
            </a>
        </div>
    </div>

</div>

<!-- Carousel Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.carousel-slide');
        const slidesContainer = document.getElementById('carouselSlides');
        const totalSlides = slides.length;
        let currentSlide = 0;
        let autoSlideInterval;

        // Initialize carousel
        updateCarousel();

        // Auto-rotate every 4 seconds
        startAutoSlide();

        function startAutoSlide() {
            autoSlideInterval = setInterval(() => {
                nextSlide();
            }, 4000);
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }

        function updateCarousel() {
            // Stop auto-rotation during manual navigation
            stopAutoSlide();
            startAutoSlide();
            
            // Apply smooth transition
            slidesContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        // Event listeners for buttons
        document.querySelector('.next').addEventListener('click', nextSlide);
        document.querySelector('.prev').addEventListener('click', prevSlide);

        // Pause auto-rotation on hover
        const carouselContainer = document.querySelector('.carousel-container');
        carouselContainer.addEventListener('mouseenter', stopAutoSlide);
        carouselContainer.addEventListener('mouseleave', startAutoSlide);
    });
</script>

@endsection