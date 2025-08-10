@extends('layouts.app')

@section('content')
<div class="container ">

    <div class="row g-4">
        <!-- Kiri: Informasi Umum -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <img src="{{asset('assets/compiled/jpg/1.jpg')}}" class="rounded-circle mb-3" width="100" height="100" alt="Avatar">
                    <h5 class="fw-bold">Daffah</h5>
                    <p class="text-muted">daffah@example.com</p>
                    <p>Makassar, Sulawesi Selatan</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Edit Profil</a>
                </div>
            </div>
        </div>

        <!-- Kanan: Detail Lain -->
        <div class="col-md-8">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h5 class="fw-bold">Bidang Kursus yang telah diselesaikan</h5>
                    <span class="badge bg-primary me-1">CTO</span>
                    <span class="badge bg-success me-1">CMO</span>
                    <span class="badge bg-warning text-dark">CEO</span>
                </div>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="fw-bold">Portofolio Ringkas</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle me-2 text-success"></i>Membuat landing page untuk UMKM "Kopi Nusantara"</li>
                        <li><i class="bi bi-check-circle me-2 text-success"></i>Analisa target market untuk Batik Tradisi</li>
                        <li><i class="bi bi-check-circle me-2 text-success"></i>Menjadi ketua tim digitalisasi produk UMKM</li>
                    </ul>
                    <a href="#" class="btn btn-sm btn-outline-secondary mt-2">Lihat Detail Portofolio</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
