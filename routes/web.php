<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/logout', function () {
    return redirect('/logout');
})->name('logout');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/dashboard', function () {
    $title = 'Halo, Daffah 👋';
    $subtitle = 'Selamat datang kembali! Ayo lanjutkan perjalanan belajarmu hari ini.';
    $courses = [
        [
            'coursetit' => 'Pemasaran Digital',
            'coursedesc' => 'Pelajari strategi dan taktik efektif untuk mempromosikan produk atau layanan Anda secara online dan menjangkau target audiens yang lebih luas.',
            'courseimg' => 'pemasaran-digital.jpg'
        ],
        [
            'coursetit' => 'Berjualan Online dan Marketplace',
            'coursedesc' => 'Kuasai cara berjualan produk di berbagai platform online dan marketplace, mulai dari membuat toko hingga mengelola pesanan.',
            'courseimg' => 'marketplace.jpg' // Asumsi: 'marketplace.jpg' sesuai dengan 'Berjualan Online dan Marketplace'
        ],
        [
            'coursetit' => 'Manajemen Keuangan Digital',
            'coursedesc' => 'Pahami prinsip dasar pengelolaan keuangan bisnis secara digital, termasuk pembukuan, penganggaran, dan pelaporan keuangan.',
            'courseimg' => 'keuangan-digital.jpg'
        ],
    ];

    return view('dashboard', compact('title', 'subtitle', 'courses'));
});

Route::get('/course/katalog', function () {
    $title = 'Katalog Kursus';
    $subtitle = 'Temukan kursus yang sesuai dengan kebutuhan dan minat Anda.';
    // Daftar kursus yang tersedia
    $courses = [
        [
            'coursetit' => 'Digitalisasi Dasar UMKM',
            'coursedesc' => 'Memahami pentingnya transformasi digital untuk usaha kecil.',
            'courseimg' => 'digitalisasidasar.jpg',
            'coursetype' => 'Dasar',
            'taken' => true // Asumsi: Kursus ini sudah diambil
        ],
        [
            'coursetit' => 'Pemasaran Digital',
            'coursedesc' => 'Pelajari strategi dan taktik efektif untuk mempromosikan produk atau layanan Anda secara online dan menjangkau target audiens yang lebih luas.',
            'courseimg' => 'pemasaran-digital.jpg',
            'coursetype' => 'CMO' // Fokus pada strategi pemasaran
        ],
        [
            'coursetit' => 'Berjualan Online dan Marketplace',
            'coursedesc' => 'Kuasai cara berjualan produk di berbagai platform online dan marketplace, mulai dari membuat toko hingga mengelola pesanan.',
            'courseimg' => 'marketplace.jpg',
            'coursetype' => 'CTO' // Terkait langsung dengan penjualan dan pemasaran
        ],
        [
            'coursetit' => 'Manajemen Keuangan Digital',
            'coursedesc' => 'Pahami prinsip dasar pengelolaan keuangan bisnis secara digital, termasuk pembukuan, penganggaran, dan pelaporan keuangan.',
            'courseimg' => 'keuangan-digital.jpg',
            'coursetype' => 'CEO' // Keuangan adalah tanggung jawab utama CEO
        ],
        [
            'coursetit' => 'Desain Grafis Promosi',
            'coursedesc' => 'Kembangkan kemampuan mendesain materi promosi yang menarik dan efektif untuk menarik perhatian calon pelanggan Anda.',
            'courseimg' => 'desain-grafis.jpg',
            'coursetype' => 'CTO' // Desain grafis adalah bagian dari upaya pemasaran
        ],
        [
            'coursetit' => 'Penggunaan Tools Teknologi',
            'coursedesc' => 'Kenali dan manfaatkan berbagai perangkat dan aplikasi digital untuk meningkatkan efisiensi operasional dan pemasaran bisnis Anda.',
            'courseimg' => 'tools-teknologi.jpg',
            'coursetype' => 'CTO', // Lebih ke arah implementasi dan penggunaan teknologi
            'taken' => true // Asumsi: Kursus ini sudah diambil
        ],
        [
            'coursetit' => 'Pengelolaan Pelanggan',
            'coursedesc' => 'Pelajari cara membangun hubungan yang kuat dengan pelanggan, mengelola keluhan, dan meningkatkan loyalitas pelanggan.',
            'courseimg' => 'pengelolaan-pelanggan.jpg',
            'coursetype' => 'CMO', // Pengelolaan pelanggan erat kaitannya dengan kepuasan dan retensi pelanggan
            'taken' => true // Asumsi: Kursus ini sudah diambil
        ],
        [
            'coursetit' => 'Analisis Data Penjualan',
            'coursedesc' => 'Pahami cara mengumpulkan, menganalisis, dan menafsirkan data penjualan untuk mengidentifikasi tren dan membuat keputusan bisnis yang lebih baik.',
            'courseimg' => 'analisis-penjualan.jpg',
            'coursetype' => 'CMO' // Analisis penjualan sangat krusial untuk strategi pemasaran
        ],
        [
            'coursetit' => 'Inovasi Produk',
            'coursedesc' => 'Dapatkan wawasan tentang proses inovasi produk, mulai dari ideation hingga peluncuran, untuk menciptakan produk yang relevan dan diminati pasar.',
            'courseimg' => 'produk-inovasi.jpg',
            'coursetype' => 'CEO', // Inovasi produk adalah strategi tingkat tinggi

        ],
        [
            'coursetit' => 'Legalitas dan Perizinan',
            'coursedesc' => 'Pahami aspek hukum dan perizinan yang diperlukan dalam menjalankan bisnis, memastikan kepatuhan dan menghindari masalah di kemudian hari.',
            'courseimg' => 'legalitas-perizinan.jpg',
            'coursetype' => 'CEO', // Legalitas dan perizinan adalah tanggung jawab tertinggi manajemen

        ],
        [
            'coursetit' => 'Strategi Go Global - Ekspor',
            'coursedesc' => 'Pelajari langkah-langkah dan strategi untuk memperluas jangkauan bisnis Anda ke pasar internasional melalui kegiatan ekspor.',
            'courseimg' => 'eksport.jpg',
            'coursetype' => 'CEO' // Strategi ekspansi global adalah keputusan strategis CEO
        ]
    ];



    return view('course.katalog', compact('courses', 'title', 'subtitle'));
});

Route::get('/course/modul/', function () {
    $title = 'Modul Kursus';
    $subtitle = 'Pelajari modul-modul penting dalam kursus ini.';
    // Daftar modul yang tersedia
    $courses = [
                [
            'coursetit' => 'Digitalisasi Dasar UMKM',
            'coursedesc' => 'Memahami pentingnya transformasi digital untuk usaha kecil.',
            'courseimg' => 'digitalisasidasar.jpg',
            'coursetype' => 'Dasar',
            'progress' => 100, // Asumsi: Kursus ini sudah selesai
        ],
            [
            'coursetit' => 'Penggunaan Tools Teknologi',
            'coursedesc' => 'Kenali dan manfaatkan berbagai perangkat dan aplikasi digital untuk meningkatkan efisiensi operasional dan pemasaran bisnis Anda.',
            'courseimg' => 'tools-teknologi.jpg',
            'coursetype' => 'CTO', // Lebih ke arah implementasi dan penggunaan teknologi
            'progress' => 40 // Asumsi: Kursus ini sudah selesai
        ],
        [
            'coursetit' => 'Pengelolaan Pelanggan',
            'coursedesc' => 'Pelajari cara membangun hubungan yang kuat dengan pelanggan, mengelola keluhan, dan meningkatkan loyalitas pelanggan.',
            'courseimg' => 'pengelolaan-pelanggan.jpg',
            'coursetype' => 'CMO', // Pengelolaan pelanggan erat kaitannya dengan kepuasan dan retensi pelanggan
            'progress' => 75 // Asumsi: Kursus ini sudah diambil
        ],

    ];

    return view('course.modul', compact('title', 'subtitle', 'courses'));
});
Route::get('course/modul/{id}', function ($id) {
    $title = 'Modul Kursus';
    $subtitle = 'Pelajari modul-modul penting dalam kursus ini.';


    return view('course.modul-detail', compact('title', 'subtitle'));
});

Route::get('course/ai-insight', function () {
    $title = 'AI Insight';
    $subtitle = 'Dapatkan wawasan mendalam tentang penggunaan AI dalam melakukan digitalisasi UMKM Anda.';

    return view('course.ai-insight', compact('title', 'subtitle'));
});

Route::get('/course/sertifikat-badge', function () {
    $title = 'Sertifikat dan Badge';
    $subtitle = 'Lihat sertifikat dan badge yang telah Anda capai.';

    // Daftar sertifikat dan badge yang telah diperoleh
    $certificates = [
        [
            'title' => 'Sertifikat Digitalisasi Dasar UMKM',
            'issued_at' => '2023-10-01',
            'badge' => 'digitalisasi-badge.png'
        ],
    ];

    return view('course.sertifikat', compact('title', 'subtitle', 'certificates'));
});

Route::get('/simulasi-usaha/studi-kasus', function () {
    $title = 'Studi Kasus Simulasi Usaha';
    $subtitle = 'Pelajari studi kasus nyata untuk memahami tantangan dan solusi dalam menjalankan usaha kecil menggunakan Tim Kolaborasi Nyata.';



    return view('simulasi-usaha.studi-kasus', compact('title', 'subtitle'));
});

Route::get('/simulasi-usaha/komunikasi', function () {
    $title = 'Komunikasi Tim';
    $subtitle = 'Kelola komunikasi tim Anda dengan efektif untuk mencapai tujuan bersama.';

    return view('simulasi-usaha.komunikasi', compact('title', 'subtitle'));
});

Route::get('/simulasi-usaha/board-proyek', function () {
    $title = 'Board Proyek';
    $subtitle = 'Kelola proyek Anda dengan sistem kanban untuk meningkatkan produktivitas tim.';

    return view('simulasi-usaha.board-proyek', compact('title', 'subtitle'));
});

Route::get('/simulasi-usaha/presentasi-akhir', function () {
    $title = 'Presentasi Akhir Simulasi Usaha';
    $subtitle = 'Kirimkan laporan akhir Anda di sini kemudian AI akan melakukan review terhadap Laporan anda.';
    $uploaded = true; // false jika belum upload

    return view('simulasi-usaha.presentasi-akhir', compact('title', 'subtitle', 'uploaded'));
});

Route::get('/digitalisasi-usaha/ai-digital-diagnostic-tool', function () {
    $title = 'AI Digital Diagnostic Tool';
    $subtitle = 'Gunakan AI untuk mendiagnosis kondisi digitalisasi usaha Anda.';

    return view('digitalisasi-usaha.digital-diasnostic-tool', compact('title', 'subtitle'));
});

Route::get('/digitalisasi-usaha/digital-roadmap-builder', function () {
    $title = 'Digital Roadmap Builder';
    $subtitle = 'Buat roadmap digitalisasi usaha Anda dengan bantuan AI.';

    return view('digitalisasi-usaha.digital-roadmap-builder', compact('title', 'subtitle'));
});

Route::get('/digitalisasi-usaha/find-your-talent', function () {
    $title = 'Find Your Digital Talent';
    $subtitle = 'Temukan talenta digital yang sesuai dengan kebutuhan usaha Anda berdasarkan rekomendasi AI.';

    return view('digitalisasi-usaha.find-your-talent', compact('title', 'subtitle'));
});

Route::get('digital-internship/evaluasi-sertifikat', function () {
    $title = 'Evaluasi Sertifikat Magang';
    $subtitle = 'Lihat hasil evaluasi sertifikat magang Anda.';

    return view('digital-internship.evaluasi-sertifikat', compact('title', 'subtitle'));
});

Route::get('/digital-internship/matching-ai', function () {
    $title = 'Matching AI Magang';
    $subtitle = 'Lihat daftar magangan yang tersedia untuk Anda sesuai dengan kriteria anda berbasis AI.';

    return view('digital-internship.matching-ai', compact('title', 'subtitle'));
});

Route::get('/digital-internship/your-internship', function () {
    $title = 'Your Internship';
    $subtitle = 'Kelola magang Anda di sini.';

    return view('digital-internship.your-internship', compact('title', 'subtitle'));
});

Route::get('/profile', function () {
    $title = 'Profil Saya';
    $subtitle = 'Kelola informasi profil Anda di sini.';

    return view('profile', compact('title', 'subtitle'));
});
