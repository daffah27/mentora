@extends('layouts.app')

@section('content')
<div class="container ">

    <ul class="nav nav-tabs mb-3" id="evaluationTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="cert-tab" data-bs-toggle="tab" data-bs-target="#cert" type="button" role="tab">Sertifikat Magang</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="feedback-tab" data-bs-toggle="tab" data-bs-target="#feedback" type="button" role="tab">Feedback UMKM</button>
        </li>
    </ul>

    <div class="tab-content" id="evaluationTabContent">
        <!-- Sertifikat Tab -->
        <div class="tab-pane fade show active" id="cert" role="tabpanel">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">UMKM: Kopi Nusantara</h5>
                            <p class="text-muted">Bidang: F&B</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Sertifikat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">UMKM: Batik Tradisi</h5>
                            <p class="text-muted">Bidang: Fashion</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Sertifikat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feedback Tab -->
        <div class="tab-pane fade" id="feedback" role="tabpanel">
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body">
                    <h5 class="card-title">UMKM: Kopi Nusantara</h5>
                    <p><strong>Rating:</strong> ⭐⭐⭐⭐☆</p>
                    <p><strong>Feedback:</strong> Sangat membantu dalam pembuatan konten digital dan analisa pasar kami. Komunikatif dan tepat waktu.</p>
                </div>
            </div>
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">UMKM: Batik Tradisi</h5>
                    <p><strong>Rating:</strong> ⭐⭐⭐☆☆</p>
                    <p><strong>Feedback:</strong> Memiliki potensi besar, hanya perlu lebih aktif dalam komunikasi dan inisiatif.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
