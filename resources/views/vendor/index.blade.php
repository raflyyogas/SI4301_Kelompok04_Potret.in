@extends('vendor.base')
@section('content')
    @if(session('vendor'))
        <div style="background-color: rgb(238, 161, 20);" id="content">
            <img class="user" src="{{ asset('img/internal/vendor.png') }}" alt="Logo Vendor">
            <h3 class="namaVendor mt-3">{{ $vendor->namaVendor }}</h3>
        </div>
        <div class="container mt-3">
            @if (count($jasa) >= 1)
            <div class="row row-cols-1 row-cols-md-1 g-4">
                <a class="btn btn-primary mt-3" href="/vendor/create" role="button">Tambah Jasa</a>
                @foreach ($jasa as $jasa)
                    <div class="col">
                        <div id="card1" class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('img/imgvendor/'.$jasa->gambar) }}" class="img-fluid rounded-start" alt="Vendor">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $jasa->namaJasa }}</h5>
                                    <p class="card-text">{{ $jasa->deskripsi }}</p>
                                    <a href="/vendor/{{ $jasa->id }}" class="btn btn-warning">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else       
                <div class="text-center">
                    <div class="text-secondary">There is no data....</div>
                    <a class="btn btn-primary mt-3" href="/vendor/create" role="button">Tambah Jasa</a>
                </div> 
            @endif
            </div>
        </div>
    @else
        <div class="container mt-5 text-center rounded shadow " height="250">
            You're still not login. Please <a href="/vendor/login" class="btn btn-success">Login</a>
        </div>
    @endif
@endsection