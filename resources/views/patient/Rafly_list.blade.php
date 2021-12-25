@extends('Rafly_app')
@section('content')
    <h3 class="mb-5 mt-5 text-center">List Vaccine M</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($vaccine as $vaccine)
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('images/'.$vaccine->image) }}">
            <div class="card-body">
                <h5 class="card-title">{{ $vaccine->name }}</h5>
                <p class="card-text"> {{ $vaccine->description }}</p> 
            </div>
            <div class="card-footer justify-content-center">
                <a href="/patient/{{ $vaccine->id }}/create" class="btn btn-primary text-center">Tampilkan Lebih Lanjut</a>
            </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection