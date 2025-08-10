@extends('layouts.app')

@section('content')
<div class="container ">

    <div class="card shadow-sm rounded-4">
        <div class="card-body p-4" style="height: 500px; overflow-y: auto;" id="chat-box">
            <!-- Dummy Chat -->
            <div class="d-flex mb-3">
                <div class="bg-primary text-white rounded-4 p-3 me-auto">
                    Halo AI, bantu analisa laporan penjualan saya.
                </div>
            </div>
            <div class="d-flex mb-3 justify-content-end">
                <div class="bg-light border rounded-4 p-3 ms-auto">
                    Tentu, berdasarkan grafik bulan ini, terjadi penurunan sebesar 12% pada minggu ke-3.
                </div>
            </div>
            <div class="d-flex mb-3">
                <div class="bg-primary text-white rounded-4 p-3 me-auto">
                    Apa yang sebaiknya saya lakukan?
                </div>
            </div>
            <div class="d-flex mb-3 justify-content-end">
                <div class="bg-light border rounded-4 p-3 ms-auto">
                    Cobalah optimasi promosi di media sosial dan evaluasi harga produk unggulan Anda.
                </div>
            </div>
        </div>

        <!-- Input Chat -->
        <div class="card-footer border-top bg-white">
            <form id="chat-form">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Ketik pesan..." id="user-input">
                    <button class="btn btn-primary" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Optional JS untuk dummy kirim -->
<script>
    document.getElementById('chat-form').addEventListener('submit', function (e) {
        e.preventDefault();
        let userInput = document.getElementById('user-input').value.trim();
        if (userInput === '') return;

        const chatBox = document.getElementById('chat-box');

        // Tambahkan pesan user
        const userBubble = document.createElement('div');
        userBubble.className = 'd-flex mb-3';
        userBubble.innerHTML = `<div class="bg-primary text-white rounded-4 p-3 me-auto">${userInput}</div>`;
        chatBox.appendChild(userBubble);

        // Scroll ke bawah
        chatBox.scrollTop = chatBox.scrollHeight;

        // Clear input
        document.getElementById('user-input').value = '';

        // Simulasi balasan AI
        setTimeout(() => {
            const aiBubble = document.createElement('div');
            aiBubble.className = 'd-flex mb-3 justify-content-end';
            aiBubble.innerHTML = `<div class="bg-light border rounded-4 p-3 ms-auto">${userInput} Juga</div>`;
            chatBox.appendChild(aiBubble);
            chatBox.scrollTop = chatBox.scrollHeight;
        }, 1000);
    });
</script>
@endsection
