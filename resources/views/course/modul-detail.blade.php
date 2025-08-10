@extends('layouts.app')

@section('content')
<div class="container py-5">

    {{-- Header Course --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <img src="{{ asset('storage/sampul-course/tools-teknologi.jpg') }}" class="img-fluid rounded shadow" alt="Course Image">
        </div>
        <div class="col-md-8">
            <h2 class="fw-bold">Penggunaan Tools Teknologi</h2>
            <span class="badge bg-primary mb-2">Tipe: CTO</span>
            <p class="text-muted">
                Kenali dan manfaatkan berbagai perangkat dan aplikasi digital untuk meningkatkan efisiensi operasional dan pemasaran bisnis Anda.
            </p>

            <div class="mb-2">
                <small>Progress Belajar: 40%</small>
                <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modul Section --}}
    <h4 class="mb-3">Daftar Modul</h4>

    {{-- Contoh Modul Dinamis (bisa di-loop dari controller) --}}
    <div class="card mb-3 shadow-sm">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h6 class="mb-1 fw-bold">Modul 1: Memahami Aplikasi Kolaborasi</h6>
                <small class="text-muted">Durasi: 10 Menit</small>
            </div>
            <div>
                <span class="badge bg-warning text-dark me-3">Belum Selesai</span>
                <a href="#" class="btn btn-primary btn-sm">Lanjutkan</a>
            </div>
        </div>
    </div>

    <div class="card mb-3 shadow-sm">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h6 class="mb-1 fw-bold">Modul 2: Penggunaan Tools Manajemen Proyek</h6>
                <small class="text-muted">Durasi: 12 Menit</small>
            </div>
            <div>
                <span class="badge bg-secondary me-3">Terkunci</span>
                <button class="btn btn-secondary btn-sm" disabled>Belum Tersedia</button>
            </div>
        </div>
    </div>

</div>
@endsection
