@extends('layouts.app')

@section('content')
<div class="container">



    <!-- Tabs: Chat & Task -->
    <ul class="nav nav-tabs mb-3" id="internTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="chat-tab" data-bs-toggle="tab" data-bs-target="#chat" type="button" role="tab">Chat</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="task-tab" data-bs-toggle="tab" data-bs-target="#task" type="button" role="tab">Task</button>
        </li>
    </ul>

    <div class="tab-content" id="internTabsContent">
        <!-- Chat -->
        <div class="tab-pane fade show active" id="chat" role="tabpanel">
            <div class="card shadow-sm">
                <div class="card-body" style="height: 300px; overflow-y: auto;" id="chatWindow">
                    <div class="mb-2"><strong>UMKM:</strong> Selamat datang! Mulai kerjakan task 1 ya.</div>
                    <div class="mb-2 text-end"><strong>Kamu:</strong> Siap kak! Saya mulai sekarang.</div>
                </div>
                <div class="card-footer p-2">
                    <form class="d-flex">
                        <input type="text" class="form-control me-2" placeholder="Ketik pesan...">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Task -->
        <div class="tab-pane fade" id="task" role="tabpanel">
            <div class="row row-cols-1 g-3">
                @foreach (['Desain feed Instagram', 'Analisis insight minggu ini', 'Edit video promosi'] as $task)
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">{{ $task }}</h6>
                                <small class="text-muted">Status: <span class="badge bg-warning text-dark">To Do</span></small>
                            </div>
                            <div>
                                <select class="form-select form-select-sm">
                                    <option>To Do</option>
                                    <option>In Progress</option>
                                    <option>Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
