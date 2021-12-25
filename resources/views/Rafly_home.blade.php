@extends('Rafly_app')
{{-- @include('vaksin.png') --}}

@section('content')
    <h1 class="text-center">About Us</h1>
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <img src="{{ asset('images/vaksin.png') }}" alt="Gambar vaksin" style="width:450px; height:320px"></img>
        </div>
        <div class="col-md-5">
            Vaksin dibuat untuk mencegah penyakit. Vaksin COVID-19 adalah harapan terbaik untuk menekan
                penularan virus corona. Mendapatkan vaksin COVID-19 maka bisa melindungi tubuh dengan menciptakan antibodi di tubuh tanpa harus sakit karena virus corona.
                Vaksin COVID-19 mampu mencegah seseorang terkena virus corona. Atau, apabila kamu tertular COVID-19, vaksin dapat mencehag tubuh dari sakit parah atau potensi hadirnya
                komplikasi serius. Dengan mendapatkan vaksin, kamu juga akan membantu melindungi orang-orang disekitar dari virus corona. Terutama orang-orang yang
                berisiko tinggi terkena penyakit parah akibat COVID-19
        </div>
    </div>
@endsection