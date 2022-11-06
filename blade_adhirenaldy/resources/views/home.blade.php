@extends('layouts.display')

@section('container')
<div class="d-flex justify-content-center">
    <img src="img/{{ $welcoming }} " alt="welcome" width="100" height="100">
</div>
<div class="mt-3 text-white">
    <p class="text-center fs-5 fw-bold">HAI!, dengan Adhi disini. </p>
    <p class="text-center fs-5 ">Dengan Website ini kalian dapat melihat film-film apa saja yang telah aku review, tentunya menurut pendapatku pribadi. :)</p>
</div>

<div class="mt-5">
    @include('partials.table')
</div>

@endsection


