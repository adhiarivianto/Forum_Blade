@extends('layouts.display')

@section('container')
<div class="d-flex justify-content-center">
    <img src="img/{{ $image }} " alt="horror_img" width="100" height="100">
</div>
<div class="mt-3 text-white">
    <p class="text-center fs-5 fw-bold">Genre : Horror </p>
</div>

<div class="mt-5">
    @include('partials.table')
</div>

@endsection
