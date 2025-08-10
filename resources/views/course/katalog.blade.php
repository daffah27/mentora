@extends('layouts.app')

@section('content')
    <div class="container ">

        <h4>Dasar</h4>
        <div class="row mb-4">
            @foreach ($courses as $course)
                @if ($course['coursetype'] === 'Dasar')
                    <div class="col-md-12">
                        <div class="card flex-md-row shadow-sm mb-4">
                            <img class="card-img-left flex-auto d-none d-md-block"
                                src="{{ asset('storage/sampul-course/' . $course['courseimg']) }}" alt="Course Dasar"
                                style="width: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h5 class="mb-1 fw-bold">{{ $course['coursetit'] }}</h5>
                                <p class="card-text mb-2 text-muted">{{ $course['coursedesc'] }}</p>
                                @if ($course['taken'] ?? false)
                                    <span class="badge bg-success mb-2">Kursus Sudah Diambil</span>
                                @elseif ($course['taken'] ?? true)
                                    <a href="#" class="btn btn-primary mt-auto">Ambil Kursus</a>
                                @endif

                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        {{-- Section: CMO --}}
        <h4 class="mt-5 mb-3">CMO (Chief Marketing Officer)</h4>
        <div class="row mb-4">
            @foreach ($courses as $course)
                @if ($course['coursetype'] === 'CMO')
                    <div class="col-md-12">
                        <div class="card flex-md-row shadow-sm mb-4">
                            <img class="card-img-left flex-auto d-none d-md-block"
                                src="{{ asset('storage/sampul-course/' . $course['courseimg']) }}" alt="Course CMO"
                                style="width: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h5 class="mb-1 fw-bold">{{ $course['coursetit'] }}</h5>
                                <p class="card-text mb-2 text-muted">{{ $course['coursedesc'] }}</p>
                                @if ($course['taken'] ?? false)
                                    <span class="badge bg-success mb-2">Kursus Sudah Diambil</span>
                                @elseif ($course['taken'] ?? true)
                                    <a href="#" class="btn btn-primary mt-auto">Ambil Kursus</a>
                                @endif

                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        {{-- Section: CTO --}}
        <h4 class="mt-5 mb-3">CTO (Chief Technology Officer)</h4>
        <div class="row mb-4">
            @foreach ($courses as $course)
                @if ($course['coursetype'] === 'CTO')
                    <div class="col-md-12">
                        <div class="card flex-md-row shadow-sm mb-4">
                            <img class="card-img-left flex-auto d-none d-md-block"
                                src="{{ asset('storage/sampul-course/' . $course['courseimg']) }}" alt="Course CTO"
                                style="width: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h5 class="mb-1 fw-bold">{{ $course['coursetit'] }}</h5>
                                <p class="card-text mb-2 text-muted">{{ $course['coursedesc'] }}</p>
                                @if ($course['taken'] ?? false)
                                    <span class="badge bg-success mb-2">Kursus Sudah Diambil</span>
                                @elseif ($course['taken'] ?? true)
                                    <a href="#" class="btn btn-primary mt-auto">Ambil Kursus</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        {{-- Section: CEO --}}
        <h4 class="mt-5 mb-3">CEO (Chief Executive Officer)</h4>
        <div class="row mb-4">
            @foreach ($courses as $course)
                @if ($course['coursetype'] === 'CEO')
                    <div class="col-md-12">
                        <div class="card flex-md-row shadow-sm mb-4">
                            <img class="card-img-left flex-auto d-none d-md-block"
                                src="{{ asset('storage/sampul-course/' . $course['courseimg']) }}" alt="Course CEO"
                                style="width: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h5 class="mb-1 fw-bold">{{ $course['coursetit'] }}</h5>
                                <p class="card-text mb-2 text-muted">{{ $course['coursedesc'] }}</p>
                                @if ($course['taken'] ?? false)
                                    <span class="badge bg-success mb-2">Kursus Sudah Diambil</span>
                                @elseif ($course['taken'] ?? true)
                                    <a href="#" class="btn btn-primary mt-auto">Ambil Kursus</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
