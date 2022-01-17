@extends('vendor.base')
@section('content')
    @if (count($transaksi)>=1)
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="rounded">
                    
                @if (session('Succeed'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ (session('Succeed')) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="table-responsive table-borderless">
                    <table class="table">
                    <thead>
                        <tr>
                        <th>Order Id</th>
                        <th>ID Jasa</th>
                        <th>ID Cust</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                        <th>Total Harga</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach($transaksi as $transaksi)
                            <tr>
                            <td>{{ $transaksi->id }}</td>
                            <td>{{ $transaksi->idJasa }}</td>
                            <td>{{ $transaksi->idCust }}</td>
                            <td>{{ $transaksi->status }}</td>
                            <td> 
                                @if ($transaksi->bukti_pembayaran == 'NULL')
                                    Tidak ada pembayaran
                                @else
                                    <img src="{{ asset('img/buktipembayaran/'.$transaksi->bukti_pembayaran) }}" alt="Gambar Vendor">
                                @endif
                            </td>
                            <b><td>Rp {{ number_format($transaksi->harga, 0, ",", ".") }}</td></b>
                            <td>
                                @if ($transaksi->status == 'Pembayaran Berhasil')
                                    <a href="" class="btn btn-success" role="button">Pembayaran Berhasil</a>
                                @elseif ($transaksi->status == 'Menunggu Pembayaran')
                                    <a href="" class="btn btn-warning" role="button">Menunggu Pembayaran</a>
                                @elseif ($transaksi->status == 'Menunggu Konfirmasi')
                                    <a href="/vendor/status/edit/{{ $transaksi->id }}" class="btn btn-danger" role="button">Edit Status</a>
                                @endif
                            </td>
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

