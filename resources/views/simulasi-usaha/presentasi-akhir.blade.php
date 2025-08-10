@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Upload Section -->
    <div class="card shadow-sm rounded-4 mb-4">
        <div class="card-body">
            <h5 class="card-title mb-3">Upload Laporan Final</h5>

            @if ($uploaded)
                <p><strong>File:</strong> laporan_simulasi_daffah_team.pdf</p>
                <p><strong>Status:</strong> Sudah diunggah</p>
                <form class="d-inline-block">
                    <label for="fileUpload" class="btn btn-outline-secondary btn-sm me-2">Ganti File</label>
                    <input type="file" id="fileUpload" class="d-none">
                </form>
                <button class="btn btn-success btn-sm">Kirim Ulang</button>
            @else
                <form>
                    <div class="mb-3">
                        <input type="file" class="form-control" id="uploadFinal" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload Laporan</button>
                </form>
            @endif
        </div>
    </div>

    <!-- Feedback dari AI -->
    @if ($uploaded)
    <div class="card shadow-sm rounded-4">
        <div class="card-body">
            <h5 class="card-title">Feedback Otomatis dari AI</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    📊 Laporan Anda cukup lengkap dan menyentuh aspek pemasaran, keuangan, dan operasional.
                </li>
                <li class="list-group-item">
                    ✅ Analisis SWOT sudah baik, namun bisa ditambahkan lebih banyak data kompetitor lokal.
                </li>
                <li class="list-group-item">
                    🧠 Rekomendasi AI: Coba tambahkan simulasi biaya distribusi dan ekspansi online.
                </li>
                <li class="list-group-item text-success">
                    🌟 Nilai Simulasi: 88/100 (Skor AI berdasarkan kelengkapan & konsistensi)
                </li>
            </ul>
        </div>
    </div>
    @endif
</div>
@endsection
