    @extends('layouts.app')

    @section('content')

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Content Container -->
    <div class="content-container">

        <!-- Sticky Header -->
        <div class="sticky-container">
            <div class="small-header">
                My Course
            </div>

            <!-- Search Section -->
            <div class="search-section">
                <form method="GET" action="{{ route('mycourse') }}" class="search-form">
                    <div class="search-bar">
                        <i class="fas fa-search"></i>
                        <input
                            type="text"
                            name="search"
                            placeholder="Cari kursus anda"
                            value="{{ request('search') }}"
                        >
                    </div>
                </form>
                
                <div class="category-shortcuts">
                    <a href="#ppg" class="category-item">
                        <i class="fas fa-graduation-cap"></i>
                        <span>PPG</span>
                    </a>
                    <a href="#pkl" class="category-item">
                        <i class="fas fa-briefcase"></i>
                        <span>PKL</span>
                    </a>
                    <a href="#self-dev" class="category-item">
                        <i class="fas fa-brain"></i>
                        <span>Self Dev</span>
                    </a>
                    <a href="#add-train" class="category-item">
                        <i class="fas fa-puzzle-piece"></i>
                        <span>Add Train</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Course List with Grid Layout -->
        <div class="course-list">

            <!-- ========== PPG Section ========== -->
            <div id="ppg" class="category-section">
                <h3 class="category-title">PPG</h3>
                
                @php
                    $ppgCourses = [];
                    foreach ($moduls as $modul) {
                        $title = strtolower($modul->title);
                        if (str_contains($title, 'pembelajaran mendalam dan asesmen') || 
                            str_contains($title, 'pembelajaran sosial emosional') || 
                            str_contains($title, 'filosofi pendidikan dan pendidikan nilai') || 
                            str_contains($title, 'pembelajaran buku ai untuk siswa') ||
                            str_contains($title, 'gemini academy')) {
                            $ppgCourses[] = $modul;
                        }
                    }
                @endphp

                <div class="category-courses">
                    @foreach ($ppgCourses as $modul)
                        @php
                            $title = strtolower($modul->title);
                            $route = null;

                            if (str_contains($title, 'pembelajaran mendalam dan asesmen')) {
                                $route = 'course.index';
                            } elseif (str_contains($title, 'pembelajaran sosial emosional')) {
                                $route = 'course2.index';
                            } elseif (str_contains($title, 'filosofi pendidikan dan pendidikan nilai')) {
                                $route = 'course3.index';
                            } elseif (str_contains($title, 'pembelajaran buku ai untuk siswa')) {
                                $route = 'course4.index';
                            } elseif (str_contains($title, 'gemini academy')) {
                                $route = 'coursegemini.index';
                            }
                        @endphp

                        <div class="course-card">
                            <div class="course-icon-wrapper">
                                @if ($modul->icon)
                                    <img src="{{ asset('icons/' . $modul->icon) }}" alt="{{ $modul->title }}" class="course-icon-img">
                                @else
                                    <i class="fas fa-book course-icon default" style="font-size: 32px; color: #666;"></i>
                                @endif
                            </div>

                            <div class="course-content">
                                <h4 class="course-title">{{ $modul->title }}</h4>
                                <p class="course-description">{{ $modul->description }}</p>
                            </div>

                            <div class="course-action">
                                @if ($route && Route::has($route))
                                    <a href="{{ route($route) }}" class="btn-enter">
                                        Lihat Materi
                                    </a>
                                @else
                                    <span class="btn-enter" style="background: #e0e0e0; color: #666; cursor: not-allowed;">
                                        Belum tersedia
                                    </span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- ========== PKL Section ========== -->
            <div id="pkl" class="category-section">
                <h3 class="category-title">PKL</h3>
                
                @php
                    $pklCourses = [];
                    foreach ($moduls as $modul) {
                        $title = strtolower($modul->title);
                        if (str_contains($title, 'pkl')) {
                            $pklCourses[] = $modul;
                        }
                    }
                @endphp

                <div class="category-courses">
                    @foreach ($pklCourses as $modul)
                        @php
                            $route = 'coursepkl.index';
                        @endphp

                        <div class="course-card">
                            <div class="course-icon-wrapper">
                                @if ($modul->icon)
                                    <img src="{{ asset('icons/' . $modul->icon) }}" alt="{{ $modul->title }}" class="course-icon-img">
                                @else
                                    <i class="fas fa-briefcase course-icon default" style="font-size: 32px; color: #666;"></i>
                                @endif
                            </div>

                            <div class="course-content">
                                <h4 class="course-title">{{ $modul->title }}</h4>
                                <p class="course-description">{{ $modul->description }}</p>
                            </div>

                            <div class="course-action">
                                @if ($route && Route::has($route))
                                    <a href="{{ route($route) }}" class="btn-enter">
                                        Lihat Materi
                                    </a>
                                @else
                                    <span class="btn-enter" style="background: #e0e0e0; color: #666; cursor: not-allowed;">
                                        Belum tersedia
                                    </span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- ========== Self Development Section ========== -->
            <div id="self-dev" class="category-section">
                <h3 class="category-title">Self Development</h3>
                
                @php
                    $selfDevCourses = [];
                    foreach ($moduls as $modul) {
                        $title = strtolower($modul->title);
                        if (str_contains($title, 'landasan pemahaman') || 
                            str_contains($title, 'kurikulum self dev')) {
                            $selfDevCourses[] = $modul;
                        }
                    }
                @endphp

                <div class="category-courses">
                    @foreach ($selfDevCourses as $modul)
                        @php
                            $title = strtolower($modul->title);
                            $route = null;

                            if (str_contains($title, 'landasan pemahaman')) {
                                $route = 'courseself.index';
                            } elseif (str_contains($title, 'kurikulum self dev')) {
                                $route = 'coursekurself.index';
                            }
                        @endphp

                        <div class="course-card">
                            <div class="course-icon-wrapper">
                                @if ($modul->icon)
                                    <img src="{{ asset('icons/' . $modul->icon) }}" alt="{{ $modul->title }}" class="course-icon-img">
                                @else
                                    <i class="fas fa-brain course-icon default" style="font-size: 32px; color: #666;"></i>
                                @endif
                            </div>

                            <div class="course-content">
                                <h4 class="course-title">{{ $modul->title }}</h4>
                                <p class="course-description">{{ $modul->description }}</p>
                            </div>

                            <div class="course-action">
                                @if ($route && Route::has($route))
                                    <a href="{{ route($route) }}" class="btn-enter">
                                        Lihat Materi
                                    </a>
                                @else
                                    <span class="btn-enter" style="background: #e0e0e0; color: #666; cursor: not-allowed;">
                                        Belum tersedia
                                    </span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- ========== Additional Training Section ========== -->
            <div id="add-train" class="category-section">
                <h3 class="category-title">Additional Training</h3>
                
                @php
                    $addTrainCourses = [];
                    foreach ($moduls as $modul) {
                        $title = strtolower($modul->title);
                        if (str_contains($title, 'key performance indicators') || 
                            str_contains($title, 'conselling guidenance trainings') || 
                            str_contains($title, 'pengimbasan gemini pak dzikri')) {
                            $addTrainCourses[] = $modul;
                        }
                    }
                @endphp

                <div class="category-courses">
                    @foreach ($addTrainCourses as $modul)
                        @php
                            $title = strtolower($modul->title);
                            $route = null;

                            if (str_contains($title, 'key performance indicators')) {
                                $route = 'coursetraining.index';
                            } elseif (str_contains($title, 'conselling guidenance trainings')) {
                                $route = 'coursebk.index';
                            } elseif (str_contains($title, 'pengimbasan gemini pak dzikri')) {
                                $route = 'coursegemini2.index';
                            }
                        @endphp

                        <div class="course-card">
                            <div class="course-icon-wrapper">
                                @if ($modul->icon)
                                    <img src="{{ asset('icons/' . $modul->icon) }}" alt="{{ $modul->title }}" class="course-icon-img">
                                @else
                                    <i class="fas fa-chart-line course-icon default" style="font-size: 32px; color: #666;"></i>
                                @endif
                            </div>

                            <div class="course-content">
                                <h4 class="course-title">{{ $modul->title }}</h4>
                                <p class="course-description">{{ $modul->description }}</p>
                            </div>

                            <div class="course-action">
                                @if ($route && Route::has($route))
                                    <a href="{{ route($route) }}" class="btn-enter">
                                        Lihat Materi
                                    </a>
                                @else
                                    <span class="btn-enter" style="background: #e0e0e0; color: #666; cursor: not-allowed;">
                                        Belum tersedia
                                    </span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    @endsection