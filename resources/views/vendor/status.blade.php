@extends('vendor.base')
@section('content')
    @if (count($transaksi)>=1)
        <div class="container mt-5">
            <div class="shadow p-3 mb-5 bg-body rounded">
            <h3 class="dataService"><b>Edit Status</b></h3>
                <form method="POST" action="">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ID Transaksi</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="idjasa" value="{{ $transaksi->id }}" readonly="readonly">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">ID Customer</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="idcust" value="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="harga" value="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Gambar</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="bukti_pembayaran">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2"><b>Status</b></label>
                            <select class="form-select" name="progress" aria-label="Default select example">
                                <option>Akan Diproses</option>
                                <option>Sedang Diproses</option>
                                <option>Selesai</option>
                            </select>
                        </div>
                        <div class="d-grid gap-2 mt-4 col-3 mx-auto">
                            <button class="btn btn-warning" name="submit" type="submit">EDIT</button>
                        </div>
                </form> 
            </div>    
        </div>
    @else
        <div class="container">
            <div class="text-center">Data Not found</div>
        </div>
    @endif
@endsection

