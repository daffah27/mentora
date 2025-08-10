@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <!-- Tabs -->
        <ul class="nav nav-tabs" id="talentTab" role="tablist">
            <li class="nav-item">
                <button class="nav-link" id="recruit-tab" data-bs-toggle="tab" data-bs-target="#recruit" type="button">Open
                    Recruitment</button>
            </li>
            <li class="nav-item">
                <button class="nav-link active" id="chat-tab" data-bs-toggle="tab" data-bs-target="#chat"
                    type="button">Chat</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="task-tab" data-bs-toggle="tab" data-bs-target="#task"
                    type="button">Task</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" id="evaluation-tab" data-bs-toggle="tab" data-bs-target="#evaluation"
                    type="button">Evaluasi & Sertifikat</button>
            </li>
        </ul>

        <div class="tab-content mt-3" id="talentTabContent">
            <!-- Chat -->
            <div class="tab-pane fade show active" id="chat" role="tabpanel">
                <div class="card p-3">
                    <div class="chat-box border rounded mb-3" style="height: 300px; overflow-y: auto;">
                        <div><strong>Daffa:</strong> Hai, bisa bantu design logo?</div>
                        <div class="text-end"><strong>Talenta:</strong> Siap kak! Mau warna dominan apa?</div>
                    </div>
                    <input type="text" class="form-control" placeholder="Ketik pesan...">
                </div>
            </div>

            <!-- Task -->
            <div class="tab-pane fade" id="task" role="tabpanel">
                <div class="card p-3">
                    <h5>Task List untuk Talenta Digital</h5>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between">
                            Buat Desain Logo
                            <span class="badge bg-warning">On Progress</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            Riset Kompetitor
                            <span class="badge bg-success">Done</span>
                        </li>
                    </ul>
                    <input type="text" class="form-control mb-2" placeholder="Task baru...">
                    <button class="btn btn-primary">Tambah Task</button>
                </div>
            </div>

            <!-- Open Recruitment -->
            <div class="tab-pane fade" id="recruit" role="tabpanel">
                <div class="card p-3">
                    <h5>Open Recruitment</h5>
                    <form>
                        <div class="mb-2">
                            <label>Posisi</label>
                            <input type="text" class="form-control" placeholder="Contoh: Desainer UI/UX">
                        </div>
                        <div class="mb-2">
                            <label>Deskripsi Tugas</label>
                            <textarea class="form-control" rows="2" placeholder="Tugas dan kriteria..."></textarea>
                        </div>
                        <div class="mb-2">
                            <label>Rekomendasi AI:</label>
                            <div class="alert alert-info">Sebaiknya rekrut talenta bidang Digital Marketing untuk membantu
                                promosi usaha Anda.</div>
                        </div>
                        <button class="btn btn-success">Buka Lowongan</button>
                    </form>
                </div>
            </div>

            <!-- Evaluasi & Sertifikat -->
            <div class="tab-pane fade" id="evaluation" role="tabpanel">
                <div class="card p-3">
                    <h5>Evaluasi Talenta Digital</h5>
                    <div class="mb-2">
                        <label>Nama Talenta</label>
                        <input type="text" class="form-control" value="Alya Aulia">
                    </div>
                    <div class="mb-2">
                        <label>Penilaian</label>
                        <select class="form-select">
                            <option>Sangat Baik</option>
                            <option>Baik</option>
                            <option>Cukup</option>
                            <option>Kurang</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label>Feedback</label>
                        <textarea class="form-control" rows="2" placeholder="Tulis komentar evaluasi..."></textarea>
                    </div>
                    <button class="btn btn-primary">Kirim Evaluasi & Buat Sertifikat</button>
                </div>
            </div>
        </div>
    </div>
@endsection
