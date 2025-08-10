@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Chat List -->
        <div class="col-md-4 col-lg-3 border-end">
            <h5 class="mb-3">Chat</h5>
            <div class="list-group">
                <a href="#chat-a" class="list-group-item list-group-item-action active" data-bs-toggle="tab">
                    🧑 Dini Auliya
                </a>
                <a href="#chat-b" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                    🧑 Alea
                </a>
                <a href="#chat-grup" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                    👥 Grup Simulasi Usaha
                </a>
            </div>
        </div>

        <!-- Chat Content Area -->
        <div class="col-md-8 col-lg-9">
            <div class="tab-content" style="height: 500px;">
                <!-- Chat Teman A -->
                <div class="tab-pane fade show active" id="chat-a">
                    <div class="border rounded-4 p-3 d-flex flex-column justify-content-between h-100">
                        <div class="overflow-auto mb-3" style="max-height: 400px;">
                            <div class="d-flex mb-2">
                                <div class="bg-primary text-white p-2 rounded-3 me-auto">Hai, udah siap simulasi?</div>
                            </div>
                            <div class="d-flex mb-2 justify-content-end">
                                <div class="bg-light p-2 rounded-3 ms-auto">Siap! Nanti sore ya</div>
                            </div>
                        </div>
                        <form class="input-group">
                            <input type="text" class="form-control" placeholder="Ketik pesan...">
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>

                <!-- Chat Teman B -->
                <div class="tab-pane fade" id="chat-b">
                    <div class="border rounded-4 p-3 d-flex flex-column justify-content-between h-100">
                        <div class="overflow-auto mb-3" style="max-height: 400px;">
                            <div class="d-flex mb-2">
                                <div class="bg-primary text-white p-2 rounded-3 me-auto">Gimana tugas keuangan?</div>
                            </div>
                            <div class="d-flex mb-2 justify-content-end">
                                <div class="bg-light p-2 rounded-3 ms-auto">Sudah aku buat excel-nya, cek ya</div>
                            </div>
                        </div>
                        <form class="input-group">
                            <input type="text" class="form-control" placeholder="Ketik pesan...">
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>

                <!-- Chat Grup -->
                <div class="tab-pane fade" id="chat-grup">
                    <div class="border rounded-4 p-3 d-flex flex-column justify-content-between h-100">
                        <div class="overflow-auto mb-3" style="max-height: 400px;">
                            <div class="d-flex mb-2">
                                <div class="bg-primary text-white p-2 rounded-3 me-auto"><strong>Dini Auliya:</strong> Kita mulai simulasi jam 4 ya</div>
                            </div>
                            <div class="d-flex mb-2 justify-content-end">
                                <div class="bg-light p-2 rounded-3 ms-auto">Oke, aku siapin materinya</div>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="bg-primary text-white p-2 rounded-3 me-auto"><strong>Alea:</strong> Aku buatkan proposal draftnya</div>
                            </div>
                        </div>
                        <form class="input-group">
                            <input type="text" class="form-control" placeholder="Ketik pesan ke grup...">
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional: Scroll auto JS dummy -->
<script>
    const tabLinks = document.querySelectorAll('[data-bs-toggle="tab"]');
    tabLinks.forEach(link => {
        link.addEventListener('shown.bs.tab', function () {
            const target = document.querySelector(this.getAttribute('href'));
            const scrollBox = target.querySelector('.overflow-auto');
            if (scrollBox) scrollBox.scrollTop = scrollBox.scrollHeight;
        });
    });
</script>
@endsection
