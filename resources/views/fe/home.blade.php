@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Content Container -->
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

<section class="continue-card">
    <div class="book-icon">
        <i class="fas fa-book-open"></i>
    </div>

    <div class="continue-text">
        <h2>Lanjutkan :</h2>
        <p>Gemini Academy</p>
    </div>
</section>

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
    <h2 class="categories-title">Kategori</h2>

    <div class="categories-grid">
        <a href="{{ route('mycourse') }}#ppg" class="category category-ppg">
            <div class="category-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <p>PPG</p>
        </a>

        <a href="{{ route('mycourse') }}#pkl" class="category category-pkl">
            <div class="category-icon">
                <i class="fas fa-briefcase"></i>
            </div>
            <p>PKL</p>
        </a>

        <a href="{{ route('mycourse') }}#self-dev" class="category category-selfdev">
            <div class="category-icon">
                <i class="fas fa-brain"></i>
            </div>
            <p>Self Dev</p>
        </a>

        <a href="{{ route('mycourse') }}#add-train" class="category category-addtrain">
            <div class="category-icon">
                <i class="fas fa-puzzle-piece"></i>
            </div>
            <p>Add Train</p>
        </a>
    </div>
</section>

<!-- ========== LEARNING TIPS ========== -->
<section class="learning-tips">
    <h2 class="section-title">Learning Tips</h2>

    <div class="tips-card">
        <div class="tips-icon">
            <i class="fas fa-lightbulb"></i>
        </div>
        <div class="tips-content">
            <h3>Belajar Efektif dengan Teknik Pomodoro</h3>
            <p>Gunakan teknik Pomodoro (25 menit belajar, 5 menit istirahat) untuk meningkatkan fokus dan produktivitas. Istirahat singkat membantu otak memproses informasi dengan lebih baik.</p>
        </div>
    </div>

    <div class="tips-card">
        <div class="tips-icon">
            <i class="fas fa-book"></i>
        </div>
        <div class="tips-content">
            <h3>Buat Catatan Aktif</h3>
            <p>Jangan hanya membaca, tapi buatlah catatan dalam bahasa Anda sendiri. Tulis poin-poin penting, buat mind map, atau rangkum materi dengan cara yang mudah dipahami.</p>
        </div>
    </div>

    <div class="tips-card">
        <div class="tips-icon">
            <i class="fas fa-users"></i>
        </div>
        <div class="tips-content">
            <h3>Belajar Bersama Teman</h3>
            <p>Manfaatkan fitur diskusi dan belajar bersama teman sejawat. Berbagi pemahaman dan saling menjelaskan konsep akan memperkuat pemahaman Anda terhadap materi.</p>
        </div>
    </div>
</section>

<!-- ========== RECOMMENDED FOR YOU (DENGAN TOMBOL GESER) ========== -->
<section class="recommended">
    <div class="section-header">
        <h2 class="section-title">Recommended for You</h2>
        <div class="scroll-buttons">
            <button class="scroll-btn left">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="scroll-btn right">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <div class="recommended-container">
        <div class="recommended-courses">
            <!-- Materi 1 -->
            <div class="course-card">
                <div class="course-icon-wrapper">
                    <img src="/icons/3.png" alt="Filosofi Pendidikan" class="course-icon-img">
                </div>
                <div class="course-content">
                    <h4 class="course-title">Filosofi Pendidikan dan Pendidikan Nilai</h4>
                    <p class="course-description">Modul ini membekali mahasiswa calon guru dengan kemampuan untuk memahami filosofi pendidikan Indonesia...</p>
                </div>
                <div class="course-action">
                    <a href="{{ route('course3.index') }}" class="btn-enter">
                        Mulai Belajar
                    </a>
                </div>
            </div>

            <!-- Materi 2 -->
            <div class="course-card">
                <div class="course-icon-wrapper">
                    <img src="/icons/5.png" alt="Gemini Academy" class="course-icon-img">
                </div>
                <div class="course-content">
                    <h4 class="course-title">Gemini Academy</h4>
                    <p class="course-description">Melalui pelatihan ini, guru akan mampu menguasai teknologi AI, khususnya Gemini...</p>
                </div>
                <div class="course-action">
                    <a href="{{ route('coursegemini.index') }}" class="btn-enter">
                        Mulai Belajar
                    </a>
                </div>
            </div>

            <!-- Materi 3 -->
            <div class="course-card">
                <div class="course-icon-wrapper">
                    <img src="/icons/7.png" alt="Landasan Pemahaman" class="course-icon-img">
                </div>
                <div class="course-content">
                    <h4 class="course-title">Landasan Pemahaman</h4>
                    <p class="course-description">Memahami konsep dasar pengembangan diri melalui refleksi, kesadaran diri...</p>
                </div>
                <div class="course-action">
                    <a href="{{ route('courseself.index') }}" class="btn-enter">
                        Mulai Belajar
                    </a>
                </div>
            </div>

            <!-- Materi 4 -->
            <div class="course-card">
                <div class="course-icon-wrapper">
                    <img src="/icons/9.png" alt="Key Performance Indicators" class="course-icon-img">
                </div>
                <div class="course-content">
                    <h4 class="course-title">Key Performance Indicators</h4>
                    <p class="course-description">Materi ini bertujuan untuk membekali tenaga pendidik dengan pemahaman tentang konsep KPI...</p>
                </div>
                <div class="course-action">
                    <a href="{{ route('coursetraining.index') }}" class="btn-enter">
                        Mulai Belajar
                    </a>
                </div>
            </div>

            <!-- Materi 5 -->
            <div class="course-card">
                <div class="course-icon-wrapper">
                    <img src="/icons/11.png" alt="Pengimbasan Gemini" class="course-icon-img">
                </div>
                <div class="course-content">
                    <h4 class="course-title">Pengimbasan Gemini Pak Dzikri</h4>
                    <p class="course-description">Modul ini bertujuan untuk membekali tenaga pendidik dengan pengetahuan dan keterampilan dalam memanfaatkan teknologi AI...</p>
                </div>
                <div class="course-action">
                    <a href="{{ route('coursegemini2.index') }}" class="btn-enter">
                        Mulai Belajar
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== UPCOMING EVENTS ========== -->
<section class="upcoming-events">
    <h2 class="section-title">Upcoming Events</h2>

    <div class="event-card">
        <div class="event-date">
            <span class="day"> - </span>
            <span class="month"> - </span>
        </div>
        <div class="event-content">
            <h3>Belum ada daftar</h3>
            <p><i class="fas fa-clock"></i> -:-</p>
            <p><i class="fas fa-map-marker-alt"></i> - </p>
        </div>
    </div>
</section>

<script>
// Tombol geser untuk Recommended section
document.addEventListener('DOMContentLoaded', function() {
    const recommendedContainer = document.querySelector('.recommended-container');
    const recommendedCourses = document.querySelector('.recommended-courses');
    const scrollLeftBtn = document.querySelector('.scroll-btn.left');
    const scrollRightBtn = document.querySelector('.scroll-btn.right');

    const scrollAmount = 280; // Sesuaikan dengan lebar card

    scrollLeftBtn.addEventListener('click', () => {
        recommendedCourses.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    });

    scrollRightBtn.addEventListener('click', () => {
        recommendedCourses.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });

    // Tambahkan efek scroll pada tombol
    recommendedCourses.addEventListener('scroll', () => {
        const scrollLeft = recommendedCourses.scrollLeft;
        const scrollWidth = recommendedCourses.scrollWidth;
        const clientWidth = recommendedCourses.clientWidth;

        // Tambahkan/sembunyikan tombol berdasarkan posisi scroll
        scrollLeftBtn.style.opacity = scrollLeft > 0 ? 1 : 0;
        scrollRightBtn.style.opacity = (scrollLeft + clientWidth < scrollWidth - 5) ? 1 : 0;
    });

    // Inisialisasi tombol
    setTimeout(() => {
        scrollLeftBtn.style.opacity = 0;
        scrollRightBtn.style.opacity = 1;
    }, 100);
});

// Carousel script
let index = 0;
const imgs = document.querySelectorAll('.carousel-img');

function show(i) {
    imgs.forEach(x => x.classList.remove('active'));
    imgs[i].classList.add('active');
}

document.querySelector('.right').onclick = () => {
    index = (index + 1) % imgs.length;
    show(index);
}

document.querySelector('.left').onclick = () => {
    index = (index - 1 + imgs.length) % imgs.length;
    show(index);
}

setInterval(() => {
    document.querySelector('.right').click();
}, 4000);
</script>

</div>

@endsection
