<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modul;

class ModulSeeder extends Seeder
{
    public function run(): void
    {
        $moduls = [
            // ====== PPG ======
            [
                'title' => 'Pembelajaran Mendalam dan Asesmen (SMK)',
                'description' => 'Membahas model dan konteks pembelajaran di SMK serta mata pelajaran PKL.',
                'unit' => 5,
                'icon' => '1.png', // ✅ Gunakan nama file lokal
            ],
            [
                'title' => 'Pembelajaran Sosial Emosional',
                'description' => 'Konsep dan Praktik Pembelajaran Sosial Emosional di Sekolah [2025]',
                'unit' => 4,
                'icon' => '2.png',
            ],
            [
                'title' => 'Filosofi Pendidikan dan Pendidikan Nilai',
                'description' => 'Modul ini membekali mahasiswa calon guru/guru dengan kemampuan untuk memahami filosofi pendidikan Indonesia, menginternalisasi nilai-nilai ke-Indonesia-an...',
                'unit' => 3,
                'icon' => '3.png',
            ],
            [
                'title' => 'Pembelajaran Buku AI untuk Siswa',
                'description' => 'Modul pembelajaran buku AI untuk Siswa',
                'unit' => 1,
                'icon' => '4.png',
            ],
            [
                'title' => 'Gemini Academy',
                'description' => 'Melalui pelatihan ini, guru akan mampu menguasai teknologi AI, khususnya Gemini, dan mengaplikasikannya dalam pembelajaran...',
                'unit' => 3,
                'icon' => '5.png',
            ],

            // ====== PKL ======
            [
                'title' => 'PKL',
                'description' => 'Isi dari Modul ini adalah sebuah dokumentasi beberapa file terkait pembekalan PKL di SMK TI BAZMA',
                'unit' => 3,
                'icon' => '6.png',
            ],

            // ====== Training of Trainer - Self Development ======
            [
                'title' => 'Landasan Pemahaman',
                'description' => 'Memahami konsep dasar pengembangan diri melalui refleksi, kesadaran diri, dan perencanaan pengembangan potensi secara berkelanjutan.',
                'unit' => 2,
                'icon' => '7.png',
            ],
            [
                'title' => 'Kurikulum Self Dev',
                'description' => 'Menjelaskan hubungan antara kurikulum dan pengembangan diri sebagai dasar dalam membentuk kompetensi dan karakter pendidik.',
                'unit' => 4,
                'icon' => '8.png',
            ],

            // ====== Additional Trainings ======
            [
                'title' => 'Key Performance Indicators',
                'description' => 'Materi ini bertujuan untuk membekali tenaga pendidik dan kependidikan dengan pemahaman tentang konsep, urgensi, dan penerapan Key Performance Indicators (KPI)...',
                'unit' => 2,
                'icon' => '9.png',
            ],

            [
                'title' => 'Conselling Guidenance Trainings',
                'description' => 'Modul ini bertujuan untuk membekali tenaga pendidik dan kependidikan dengan pengetahuan dan keterampilan dasar dalam memberikan bimbingan konseling kepada siswa...',
                'unit' => 1,
                'icon' => '1.png',
            ],

            [
                'title' => 'Pengimbasan Gemini Pak Dzikri',
                'description' => 'Modul ini bertujuan untuk membekali tenaga pendidik dan kependidikan dengan pengetahuan dan keterampilan dalam memanfaatkan teknologi AI, khususnya Gemini...',
                'unit' => 1,
                'icon' => '11.png',
            ],
        ];

        foreach ($moduls as $modul) {
            Modul::updateOrCreate(
                ['title' => $modul['title']],
                $modul
            );
        }
    }
}