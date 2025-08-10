@extends('layouts.app')

@section('content')
    <div class="container ">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach (range(1, 6) as $i)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">UMKM Digital Nusantara {{ $i }}</h5>
                            <p class="card-text">
                                <strong>Bidang:</strong> Fashion <br>
                                <strong>Lokasi:</strong> Jakarta Selatan <br>
                                <strong>Kebutuhan:</strong> Course CTO, CMO <br>
                            </p>
                            <button class="btn btn-primary w-100">Lamar Magang</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>




    </div>
@endsection
