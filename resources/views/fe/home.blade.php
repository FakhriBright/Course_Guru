@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="container">

<header class="header">
    <div class="user-section">
        <div class="user-icon">
            <i class="fas fa-user"></i>
        </div>

        <div class="user-text">
            <h1>Halo, Pak/Bu {{ Auth::user()->name }}!</h1>
            <p>Let's start learning.</p>
        </div>
    </div>
</header>

<div class="continue-card">
    <div class="book-icon">
        <i class="fas fa-book-open"></i>
    </div>

    <div class="continue-text">
        <h2>Baca juga :</h2>
        <p>Gemini Academy</p>
    </div>

    <a href="{{ route('coursegemini.index') }}" class="continue-btn">
        Lihat Materi
    </a>
</div>


<section class="carousel-section">
    <div class="carousel-container">
        <img class="carousel-img active" src="/images/slide1.png" alt="Slide 1">
        <img class="carousel-img" src="/images/slide2.png" alt="Slide 2">
        <img class="carousel-img" src="/images/slide3.png" alt="Slide 3">
        <img class="carousel-img" src="/images/slide4.png" alt="Slide 4">

        <div class="carousel-arrow left">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="carousel-arrow right">
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>
</section>

<section class="categories">
    <h2 class="categories-title">Eksplorasi Kategori:</h2>

    <div class="category-icons">

        <a href="{{ route('mycourse') }}#ppg" class="category category-ppg">
            <div class="category-icon">
                <img src="{{ asset('images/ppg.png') }}" alt="PPG">
            </div>
            <span>PPG</span>
        </a>

        <a href="{{ route('mycourse') }}#pkl" class="category category-pkl">
            <div class="category-icon">
                <img src="{{ asset('images/pkl.png') }}" alt="PKL">
            </div>
            <span>PKL</span>
        </a>

        <a href="{{ route('mycourse') }}#self-dev" class="category category-selfdev">
            <div class="category-icon">
                <img src="{{ asset('images/selfdev.png') }}" alt="Self Dev">
            </div>
            <span>Self Dev</span>
        </a>

        <a href="{{ route('mycourse') }}#add-train" class="category category-addtrain">
            <div class="category-icon">
                <img src="{{ asset('images/addtrain.png') }}" alt="Add Train">
            </div>
            <span>Add Train</span>
        </a>

    </div>
</section>


<script>
document.addEventListener("DOMContentLoaded", function () {

    let index = 0;
    let direction = 1; // 1 = maju, -1 = mundur
    const imgs = document.querySelectorAll('.carousel-img');
    const total = imgs.length;

    function show(i) {
        imgs.forEach(x => x.classList.remove('active'));
        imgs[i].classList.add('active');
    }

    function nextAuto() {
        index += direction;

        // kalau sudah di ujung kanan
        if (index === total - 1) {
            direction = -1;
        }

        // kalau sudah di ujung kiri
        if (index === 0) {
            direction = 1;
        }

        show(index);
    }

    // tombol kanan (manual tetap maju normal)
    document.querySelector('.right').onclick = () => {
        index = (index + 1) % total;
        direction = 1;
        show(index);
    };

    // tombol kiri (manual tetap mundur normal)
    document.querySelector('.left').onclick = () => {
        index = (index - 1 + total) % total;
        direction = -1;
        show(index);
    };

    // auto 2 detik
    setInterval(nextAuto, 2000);

});
</script>

</div>

@endsection
