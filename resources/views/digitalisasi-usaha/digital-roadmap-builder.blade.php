@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Form Input Informasi Usaha -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="mb-3">Informasi Usaha</h5>
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Nama Usaha</label>
                        <input type="text" class="form-control" placeholder="Contoh: Kopi Mantap Jaya" value="Kripik Pisang Bandung">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Bidang Usaha</label>
                        <input type="text" class="form-control" placeholder="Contoh: Makanan dan Minuman" value="Makanan Ringan Tradisional">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi Singkat Usaha</label>
                    <textarea class="form-control" rows="3" placeholder="Tuliskan deskripsi singkat tentang usaha Anda...">Usaha Kripik Pisang Bandung yang menyediakan berbagai varian rasa dan kemasan.</textarea>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Lokasi Usaha</label>
                        <input type="text" class="form-control" placeholder="Contoh: Jalan Raya No. 123, Bandung" value="Jalan Raya No. 123, Bandung">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Target Pasar</label>
                        <input type="text" class="form-control" placeholder="Contoh: Mahasiswa dan Pelajar" value="Mahasiswa dan Pelajar">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Modal Awal</label>
                    <input type="number" class="form-control" placeholder="Contoh: 5000000" value="5000000">
                </div>
                <button type="submit" class="btn btn-primary" disabled>Simpan Informasi Usaha</button>
            </form>
        </div>
    </div>

    <!-- Roadmap Digitalisasi -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="mb-3">Tahapan Digitalisasi Usaha (AI Generated)</h5>
            <ol>
                <li><strong>Digital Presence:</strong> Buat akun media sosial dan website sederhana.</li>
                <li><strong>Digital Marketing:</strong> Pelajari cara menjalankan promosi di Instagram/Facebook Ads.</li>
                <li><strong>Online Payment:</strong> Integrasi QRIS, e-wallet, dan sistem kasir digital.</li>
                <li><strong>Manajemen Operasional:</strong> Gunakan aplikasi POS, spreadsheet, atau platform manajemen stok.</li>
                <li><strong>Analisis Data:</strong> Kumpulkan data penjualan dan lakukan analisis sederhana.</li>
                <li><strong>Otomatisasi:</strong> Gunakan tools otomatisasi seperti chatbot, autoresponder, atau email marketing.</li>
            </ol>
        </div>
    </div>

    <!-- Analisis Risiko -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="mb-3">Analisis Risiko Digitalisasi</h5>
            <ul>
                <li><strong>Kekurangan SDM:</strong> Tidak ada karyawan yang paham teknologi.</li>
                <li><strong>Biaya Tinggi:</strong> Belum tersedia dana untuk platform digital.</li>
                <li><strong>Penolakan Konsumen:</strong> Beberapa konsumen belum siap dengan pembayaran non-tunai.</li>
                <li><strong>Keamanan Data:</strong> Risiko kebocoran data jika tidak dikelola dengan baik.</li>
            </ul>
        </div>
    </div>

    <!-- Rencana Manajemen Sumber Daya & Talenta Digital -->
    <div class="card mb-5">
        <div class="card-body">
            <h5 class="mb-3">Manajemen Sumber Daya dan Talenta Digital</h5>
            <p><strong>Rekomendasi AI:</strong></p>
            <ul>
                <li>Latih minimal 1 orang staf sebagai digital operator internal.</li>
                <li>Gunakan platform gratis seperti Canva, Google Workspace, dan Tokopedia/Shopee.</li>
                <li>Outsource jika perlu untuk pembuatan website dan iklan digital awal.</li>
                <li>Ikut pelatihan daring (gratis atau bersertifikat) seperti Digital Talent Scholarship, Kampus UMKM, dll.</li>
            </ul>
        </div>
    </div>
</div>
@endsection
