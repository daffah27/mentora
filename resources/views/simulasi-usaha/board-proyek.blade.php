@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row g-4" id="kanban-board">
        <!-- To Do -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="mb-0">To Do</h5>
                </div>
                <div class="card-body p-2 min-vh-50" id="todo">
                    <div class="task card mb-2 p-2" data-member="Daffah">Riset Kompetitor <span class="badge bg-primary">Daffah</span></div>
                    <div class="task card mb-2 p-2" data-member="Dini">Desain Poster Promosi <span class="badge bg-success">Dini</span></div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-outline-primary w-100" onclick="addTask('todo')">+ Tambah Task</button>
                </div>
            </div>
        </div>

        <!-- In Progress -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="mb-0">In Progress</h5>
                </div>
                <div class="card-body p-2 min-vh-50" id="inprogress">
                    <div class="task card mb-2 p-2" data-member="Alea">Buat Konten IG <span class="badge bg-warning text-dark">Alea</span></div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-outline-primary w-100" onclick="addTask('inprogress')">+ Tambah Task</button>
                </div>
            </div>
        </div>

        <!-- Done -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Done</h5>
                </div>
                <div class="card-body p-2 min-vh-50" id="done">
                    <div class="task card mb-2 p-2" data-member="Dini">Draft Anggaran <span class="badge bg-success">Dini</span></div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-outline-primary w-100" onclick="addTask('done')">+ Tambah Task</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SortableJS CDN -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

<script>
    ['todo', 'inprogress', 'done'].forEach(id => {
        new Sortable(document.getElementById(id), {
            group: 'kanban',
            animation: 150
        });
    });

    function addTask(columnId) {
        const member = prompt("Masukkan nama anggota (Daffah, Dini, Alea):");
        if (!member) return;

        const title = prompt("Masukkan nama task:");
        if (!title) return;

        const badgeColor = member === 'Daffah' ? 'primary' :
                           member === 'Dini' ? 'success' :
                           member === 'Alea' ? 'warning text-dark' : 'secondary';

        const task = document.createElement('div');
        task.className = 'task card mb-2 p-2';
        task.setAttribute('data-member', member);
        task.innerHTML = `${title} <span class="badge bg-${badgeColor}">${member}</span>`;

        document.getElementById(columnId).appendChild(task);
    }
</script>
@endsection
