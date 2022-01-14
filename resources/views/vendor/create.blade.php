@extends('vendor.base')
@section('content')
        <div class="container mt-5">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <h3 class="dataService"><b>Add Service</b></h3>
                <form method="POST" enctype="multipart/form-data" action="{{ route('nambahjasa') }}">
                    @csrf<div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Vendor</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="vendor" value="{{ $vendor->id }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Jasa</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" name="image" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ketegori</label>
                        @foreach($kategori as $kategori)
                            <div class="form-check form-check-inline ms-3">
                                <input class="form-check-input" type="radio" value="{{ $kategori->id }}" id="flexCheckDefault" name="kategori">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $kategori->jenis }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button class="btn btn-warning" name="submit" type="submit">ADD SERVICE +</button>
                    </div>
                </form> 
            </div>    
        </div>
@endsection