@extends('layouts.display')

@section('container')
<div class="d-flex justify-content-center mt-5">
    <div class="card border-success mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/{{ $foto }}" alt="foto_profile" width="130" height="130">
          </div>
          <div class="col-md-8 ">
            <div class="card-body">
              <h5 class="card-title">{{ $nama }}</h5>
              <p class="card-text">{{ $nim }}</p>
              <p class="card-text"><small class="text-muted">{{ $kelas }}</small></p>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="mt-3 text-white">
    <p class="text-center fs-5 fw-bold">Terima Kasih! </p>
</div>
@endsection
