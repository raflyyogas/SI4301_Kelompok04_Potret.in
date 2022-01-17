@extends('base')
@section('content')

<div class="container mt-3 mb-5">
    <p class="text-center text-black"><strong>Upload bukti pembayaran</strong></p>
    <form method="POST" enctype="multipart/form-data" action="{{ route('uploadbukti') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ID Transaction</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="id" value="{{ $transaksi->id }}" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="harga" value="{{ $transaksi->harga }}" readonly
        </div>
        <div class="mb-3" hidden>
            <label for="exampleFormControlInput1" class="form-label">Status</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="status" value="Menunggu Konfirmasi" readonly>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" name="image" id="formFile">
        </div>
        <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-primary" name="submit" type="submit">Upload bukti pembayaran</button>
        </div>
    </form> 
</div>

<br><br><br><br>

@endsection