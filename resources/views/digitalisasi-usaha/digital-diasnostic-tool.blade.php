@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Progress Digitalisasi -->
    <div class="card shadow-sm rounded-4 mb-4">
        <div class="card-body">
            <h5 class="mb-3">Progress Digitalisasi UMKM Anda</h5>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Website UMKM
                    <span class="badge bg-success">✔️ Sudah</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Akun Sosial Media Aktif
                    <span class="badge bg-success">✔️ Sudah</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pembayaran Digital
                    <span class="badge bg-warning text-dark">⚠️ Sebagian</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Penggunaan Aplikasi Pencatatan Keuangan
                    <span class="badge bg-danger">❌ Belum</span>
                </li>
            </ul>

            <!-- Progress Bar -->
            <div class="progress" style="height: 20px;">
                <div class="progress-bar bg-info" role="progressbar" style="width: 60%;" aria-valuenow="60"
                    aria-valuemin="0" aria-valuemax="100">
                    60% Digitalisasi
                </div>
            </div>
        </div>
    </div>

    <!-- Chatbot AI -->
    <div class="card shadow-sm rounded-4">
        <div class="card-body d-flex flex-column" style="height: 500px; overflow-y: auto;">
            <div class="mb-3">
                <div class="bg-light border rounded-3 p-2 ">👋 Halo! Yuk, kita mulai mendiagnosis kondisi digital UMKM Anda. Sudah punya akun media sosial?</div>
            </div>
            <div class="text-end mb-3">
                <div class="bg-primary text-white rounded-3 p-2 d-inline-block">Sudah, saya aktif di Instagram dan TikTok</div>
            </div>
            <div class="mb-3">
                <div class="bg-light border rounded-3 p-2 ">Mantap! Apakah Anda sudah menggunakan sistem kasir atau aplikasi pencatatan penjualan?</div>
            </div>
            <!-- Chat lanjut... -->
        </div>

        <!-- Input chat -->
        <div class="card-footer border-0">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Ketik pertanyaan atau jawaban Anda..." aria-label="User Message">
                    <button class="btn btn-primary" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
