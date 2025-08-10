@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row g-4">
        <!-- Sidebar: Pilihan Simulasi -->
        <div class="col-md-6">
            <h4 class="fw-bold mb-3">Pilih Simulasi Usaha</h4>
            <div class="d-grid gap-3">
                <!-- Simulasi 1 -->
                <div class="card shadow-sm rounded-4">
                    <div class="card-body">
                        <h5 class="card-title">Usaha Minuman Kekinian</h5>
                        <p class="card-text small text-muted">Rekomendasi: <strong>Pemasaran Digital</strong>, <strong>Manajemen Keuangan Dasar</strong></p>
                        <ul class="text-muted small mb-3">
                            <li>Simulasi branding dan promo media sosial</li>
                            <li>Pengelolaan modal awal Rp2 juta</li>
                            <li>Analisis target pasar Gen-Z</li>
                        </ul>
                        <button class="btn btn-primary btn-sm" onclick="showTeam('minuman')">Pilih Simulasi Ini</button>
                    </div>
                </div>
                <!-- Simulasi 2 -->
                <div class="card shadow-sm rounded-4">
                    <div class="card-body">
                        <h5 class="card-title">Usaha Jasa Cuci Sepatu</h5>
                        <p class="card-text small text-muted">Rekomendasi: <strong>Branding Produk UMKM</strong>, <strong>Pengelolaan Operasional</strong></p>
                        <ul class="text-muted small mb-3">
                            <li>Simulasi operasional dan sistem antrian</li>
                            <li>Analisa break-even point</li>
                            <li>Pengembangan layanan antar-jemput</li>
                        </ul>
                        <button class="btn btn-primary btn-sm" onclick="showTeam('sepatu')">Pilih Simulasi Ini</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Konten Kanan: Rekomendasi Tim -->
        <div class="col-md-6">
            <h4 class="fw-bold mb-3">Rekomendasi Tim dari AI</h4>

            <!-- Matchmaking Minuman Kekinian -->
            <div id="team-minuman" class="team-section d-none">
                <form>
                    <p class="text-muted">Simulasi: <strong>Minuman Kekinian</strong></p>
                    <div class="mb-3">
                        <label class="form-label">CMO</label>
                        @foreach(['Anisa Putri', 'Fajar Ramadhan', 'Dewi Aulia'] as $name)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cmo" value="{{ $name }}">
                                <label class="form-check-label">{{ $name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CTO</label>
                        @foreach(['Rizky Maulana', 'Tari Nurhaliza', 'Budi Santoso'] as $name)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cto" value="{{ $name }}">
                                <label class="form-check-label">{{ $name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-success w-100">Konfirmasi Tim</button>
                </form>
            </div>

            <!-- Matchmaking Jasa Cuci Sepatu -->
            <div id="team-sepatu" class="team-section d-none">
                <form>
                    <p class="text-muted">Simulasi: <strong>Jasa Cuci Sepatu</strong></p>
                    <div class="mb-3">
                        <label class="form-label">CEO</label>
                        @foreach(['Andi Nugraha', 'Siti Nabila', 'Rahmat Hidayat'] as $name)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ceo" value="{{ $name }}">
                                <label class="form-check-label">{{ $name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CTO</label>
                        @foreach(['Hana Ayu', 'Ilham Putra', 'Yusuf Aditya'] as $name)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cto" value="{{ $name }}">
                                <label class="form-check-label">{{ $name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-success w-100">Konfirmasi Tim</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function showTeam(simulasi) {
        document.querySelectorAll('.team-section').forEach(el => el.classList.add('d-none'));
        document.getElementById('team-' + simulasi).classList.remove('d-none');
    }
</script>
@endsection
