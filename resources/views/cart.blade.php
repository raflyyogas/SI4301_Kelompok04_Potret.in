@extends('base')
@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            @if (session('bukti'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ (session('bukti')) }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="rounded">
                <div class="table-responsive table-borderless">
                    <table class="table">
                    <thead>
                        <tr>
                        <th>Order Id</th>
                        <th>ID Jasa</th>
                        <th>ID Cust</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                        <th>Total</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach($transaksi as $transaksi)
                            <tr>
                                <td>{{ $transaksi->id }}</td>
                                <td> {{ $transaksi->idJasa }} </td>
                                <td>{{ $transaksi->idCust }}</td>
                                <td>
                                    @if ($transaksi->status == 'Pembayaran Berhasil')
                                        Transaksi Sedang Berjalan
                                    @elseif ($transaksi->status == 'Menunggu Konfirmasi')
                                        Menunggu Konfirmasi
                                    @else
                                        {{ $transaksi->status }}
                                    @endif
                                </td>
                                <td><img src="{{ asset('img/buktipembayaran/'.$transaksi->bukti_pembayaran) }}" alt="Gambar Vendor"></td>
                                <td><strong>Rp {{ number_format($transaksi->harga, 0, ",", ".") }}</strong></td>
                                <td>
                                    @if ($transaksi->status == 'Pembayaran Berhasil')
                                        <a href="" class="btn btn-success" role="button">Kirim bukti Pembayaran</a>
                                    @elseif ($transaksi->status == 'Menunggu Konfirmasi')
                                        <a href="" class="btn btn-warning" role="button">Menunggu Konfirmasi</a>
                                    @elseif ($transaksi->status == 'Menunggu Pembayaran')
                                        <a href="/cart/upload/{{ $transaksi->id }}" class="btn btn-danger" role="button">Kirim bukti Pembayaran</a>
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
@endsection