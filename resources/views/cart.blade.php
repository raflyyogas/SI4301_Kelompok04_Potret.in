@extends('base')
@section('content')
    @if (count($transaksi)>=1)
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="rounded">
                <div class="table-responsive table-borderless">
                    <table class="table">
                    <thead>
                        <tr>
                        <th>Order Id</th>
                        <th>ID Jasa</th>
                        <th>ID Cust</th>
                        <th>status</th>
                        <th>Total</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach($transaksi as $transaksi)
                            <tr>
                            <td>{{ $transaksi->id }}</td>
                            <td>{{ $transaksi->idJasa }}</td>
                            <td>{{ $transaksi->idCust }}</td>
                            <td>{{ $transaksi->status }}</td>
                            <b><td>Rp {{ number_format($transaksi->harga, 0, ",", ".") }}</td></b>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>

                    <br><br><br><br>
                </div>
                </div>
            </div>
            </div>
        </div>
    @else
        <div class="container p-5 mx-auto text-center text-black">No Data</div>
        <br><br><br><br><br>
    @endif
@endsection