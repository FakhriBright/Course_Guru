<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ModulController;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\Course2Controller;
use App\Http\Controllers\Course3Controller;
use App\Http\Controllers\Course4Controller;
use App\Http\Controllers\CourseSelfController;
use App\Http\Controllers\CourseKurselfController;
use App\Http\Controllers\CourseTrainingController;
use App\Http\Controllers\CoursePklController;
use App\Http\Controllers\CourseGeminiController;
use App\Http\Controllers\CourseGemini2Controller;
use App\Http\Controllers\CourseBkController;

/*
|--------------------------------------------------------------------------
| ROOT
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    }
    return redirect()->route('login');
})->name('root');

/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

/*
|--------------------------------------------------------------------------
| AUTH AREA
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    | HOME
    */
    Route::get('/home', [ModulController::class,'home'])->name('home');

    /*
    | MY COURSE (utama)
    */
    Route::get('/my-course', [ModulController::class,'index'])->name('mycourse');

    /*
    | ALIAS LAMA (BIAR GA ERROR)
    */
    Route::get('/modul', function(){
        return redirect('/my-course');
    });

    /*
    | SETTING
    */
    Route::view('/setting','fe.setting')->name('setting');

    /*
    |--------------------------------------------------------------------------
    | PROFILE (DEFAULT LARAVEL)
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    |--------------------------------------------------------------------------
    | COURSES (DETAIL MATERI)
    |--------------------------------------------------------------------------
    */

    // Teacher Development (Course 1)
    Route::get('/course1', [CourseController::class, 'index'])->name('course.index');
    Route::get('/course1/{section}/{slug}', [CourseController::class, 'show'])->name('course.show');

    // Course 2 (CASEL)
    Route::get('/course2', [Course2Controller::class, 'index'])->name('course2.index');
    Route::get('/course2/{slug}', [Course2Controller::class, 'show'])->name('course2.show');

    // Course 3 (Filosofi Pendidikan)
    Route::get('/course3', [Course3Controller::class, 'index'])->name('course3.index');
    Route::get('/course3/{slug}', [Course3Controller::class, 'show'])->name('course3.show');

    // Course 4 (Buku AI)
    Route::get('/course4', [Course4Controller::class, 'index'])->name('course4.index');
    Route::get('/course4/{slug}', [Course4Controller::class, 'show'])->name('course4.show');

    // Self Development
    Route::get('/courseself', [CourseSelfController::class, 'index'])->name('courseself.index');
    Route::get('/courseself/{slug}', [CourseSelfController::class, 'show'])->name('courseself.show');

    // Kurikulum Self
    Route::get('/coursekurself', [CourseKurselfController::class, 'index'])->name('coursekurself.index');
    Route::get('/coursekurself/{slug}', [CourseKurselfController::class, 'show'])->name('coursekurself.show');

    // Training
    Route::get('/coursetraining', [CourseTrainingController::class, 'index'])->name('coursetraining.index');
    Route::get('/coursetraining/{slug}', [CourseTrainingController::class, 'show'])->name('coursetraining.show');

    // PKL
    Route::get('/coursepkl', [CoursePklController::class, 'index'])->name('coursepkl.index');
    Route::get('/coursepkl/{slug}', [CoursePklController::class, 'show'])->name('coursepkl.show');

    // Gemini Academy
    Route::get('/coursegemini', [CourseGeminiController::class, 'index'])->name('coursegemini.index');
    Route::get('/coursegemini/{slug}', [CourseGeminiController::class, 'show'])->name('coursegemini.show');
    
    // Gemini 2
    Route::get('/coursegemini2', [CourseGemini2Controller::class, 'index'])->name('coursegemini2.index');
    Route::get('/coursegemini2/{slug}', [CourseGemini2Controller::class, 'show'])->name('coursegemini2.show');

    // BK (Bimbingan Konseling)
    Route::get('/coursebk', [CourseBkController::class, 'index'])->name('coursebk.index');
    Route::get('/coursebk/{slug}', [CourseBkController::class, 'show'])->name('coursebk.show');
});

/*
|--------------------------------------------------------------------------
| AUTH DEFAULT
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';