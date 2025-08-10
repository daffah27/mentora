@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row g-4">
        <!-- Dummy Data Sertifikat -->
       @foreach ($certificates as $certificate)
       <div class="col-md-6">
           <div class="card shadow-sm rounded-4">
               <div class="card-body d-flex align-items-center justify-content-between">
                   <div class="d-flex align-items-center gap-3">
                       <div>
                           <h5 class="mb-1">{{ $certificate['title'] }}</h5>
                           <small class="text-muted">Diterbitkan pada: {{ $certificate['issued_at'] }}</small>
                       </div>
                   </div>
                   <a href="#" class="btn btn-success rounded-pill">
                       <i class="bi bi-download me-1"></i> Unduh Sertifikat
                   </a>
               </div>
           </div>
       </div>
       @endforeach
    </div>
</div>
@endsection
