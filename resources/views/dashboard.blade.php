@extends('layouts.app')

@section('content')

<!-- Section: Ringkasan -->
<section class="py-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6 class="text-muted">Kursus Diikuti</h6>
                        <h3 class="fw-bold">3 Kursus</h3>
                        <a href="/courses" class="btn btn-outline-primary btn-sm">Lihat Semua Kursus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6 class="text-muted">Progress Belajar</h6>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%;"></div>
                        </div>
                        <p class="mt-2">60% Selesai</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6 class="text-muted">Peran Anda</h6>
                        <p class="mb-1">Mentora: <strong>Pemilik UMKM</strong></p>
                        <p class="mb-0">Kursus: <span class="text-success">CTO, CMO</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Info Peran & UMKM -->
<section class="py-4 ">
    <div class="container">
        <h5 class="mb-3">Informasi Tambahan</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-info">
                    <h6 class="mb-1">UMKM Anda</h6>
                    <p class="mb-0">Nama UMKM: <strong>Kripik Pisang Bandung</strong><br>
                        Sektor: <strong>Makanan Ringan Tradisional</strong><br>
                        Magang Digital: <span class="badge bg-success">2 Orang</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Rekomendasi Kursus -->
<section class="py-5">
    <div class="container">
        <h4 class="mb-4">Rekomendasi Kursus Berikutnya</h4>
        <div class="row g-4">
            @foreach ($courses as $course)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('storage/sampul-course/' . $course['courseimg']) }}" class="card-img-top" alt="{{ $course['coursetit'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course['coursetit'] }}</h5>
                        <p class="card-text">{{ $course['coursedesc'] }}</p>
                        <a href="/courses/strategi-pemasaran" class="btn btn-outline-primary btn-sm">Lihat Kursus</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection
