@extends('layouts.app')
@section('content')
    <!-- Section: Course yang Diambil -->
    <div class="container py-5">


        @foreach ($courses as $course)
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card flex-md-row shadow-sm">
                        <img class="card-img-left flex-auto d-none d-md-block" src="{{ asset('assets/compiled/sampul-course/' . $course['courseimg']) }}"
                            alt="Course Image" style="width: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold mb-1">{{ $course['coursetit'] }}</h5>
                        <p class="text-muted mb-2">{{ $course['coursedesc'] }}</p>

                        <div class="mb-2">
                            <small>Progress Belajar: {{ $course['progress'] }}%</small>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar {{ $course['progress'] == 100 ? 'bg-success' : ($course['progress'] >= 50 ? 'bg-warning' : 'bg-danger') }}" role="progressbar" style="width: {{ $course['progress'] }}%;"
                                    aria-valuenow="{{ $course['progress'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <a href="/course/modul/1" class="btn btn-outline-primary mt-3 align-self-start">Detail</a>
                    </div>
                </div>
            </div>
        </div>

       @endforeach
    </div>
@endsection
