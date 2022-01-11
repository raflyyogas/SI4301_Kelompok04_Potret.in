@extends('base')
@section('content')

  <div class="container mt-4">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">POTRET</h1>
        <p class="lead fw-normal">We create a moment</p>
        <a class="btn btn-outline-secondary" href="#">Video soon</a>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
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