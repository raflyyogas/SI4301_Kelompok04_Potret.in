@extends('base')
@section('content')

  <div class="container mt-4" >
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active ">
          <img src="{{ asset('img/internal/gambar.jpg') }}" class="rounded d-block w-100" alt="Banner pertama" width="100px" height="300px">
        </div>
        <div class="carousel-item ">
          <img src="{{ asset('img/internal/gambar1.jpg') }}" class="rounded d-block w-100" alt="Banner kedua" width="100px" height="300px">
        </div>
        <div class="carousel-item rounded">
          <img src="{{ asset('img/internal/gambar2.jpg') }}" class="rounded d-block w-100" alt="Banner ketiga" width="100px" height="300px">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="container mt-3 mb-3">
    <span class="justify-content-end">Location: Jakarta </span>
  </div>
  <div class="container mt-3">
    <div class="card-group">
        <div class="card">
            <img src="{{ asset('img/internal/logo.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Vendor</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
                <p class="card-text btn btn-outline-primary">Choose Vendor</p>
            </div>
        </div>
    </div>
  </div>
  <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-6">
            <img src="{{ asset('img/internal/logo.png') }}" alt="Picture">
        </div>
        <div class="col-6">
            <h1 class="text-center">Ilustrasi</h1><br>
            <h5>Consequat nulla ullamco Lorem occaecat anim id tempor et consectetur anim cupidatat eu labore. Cillum duis ipsum ullamco velit do minim consectetur laborum enim duis duis quis. Nostrud ad exercitation ullamco dolor est tempor irure proident dolor irure.</h5>
        </div>
    </div>
  </div>
@endsection