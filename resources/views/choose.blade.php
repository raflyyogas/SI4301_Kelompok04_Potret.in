@extends('base')
@section('content')

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="https://alexandra.bridestory.com/image/upload/assets/dsc_6137-HkV6R_d7r.jpg" alt="First slide" />
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="https://jendela360.com/info/wp-content/uploads/2019/09/Azilla-Villa.jpg" alt="Second slide" />
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="https://thebridedept.s3-ap-southeast-1.amazonaws.com/2019/03/akr_3980-1553852800.jpg" alt="Third slide" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <h1 class="fw-light text-center text-lg-start mt-4 mb-0">{{ $jasa->namaJasa }}</h1>

        <hr class="mt-2 mb-5" />

        <div class="row text-center text-lg-start">
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://img.onethreeonefour.com/775032c2-01f7-4305-8381-8146d545afae.jpg" alt="" />
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://brideandbreakfast.hk/wp-content/uploads/2020/06/Michelle-Kwok-Photography-Hong-Kong-engagement-pre-wedding-picnic-outdoor-casual-romantic-Helena-Eugene-01.jpg" alt="" />
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://ammora.co/wp-content/uploads/2020/07/Jasa-Foto-Prewedding-Malang-Kediri-Surabaya-Bali-Ammora-12.jpg" alt="" />
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://cdn-image.hipwee.com/wp-content/uploads/2019/04/hipwee-39504782_1988536401197452_2026831363751018496_n-1-640x425.jpg" alt="" />
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://www.rukita.co/stories/wp-content/uploads/2020/01/tren-pernikahan-2020.jpg" alt="" />
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://www.casaindonesia.com/lkgallery/images/4tHEA2_Tren_Dekorasi_Pernikahan_Di_Masa_Pandemi_2021_CASA_Indonesia_(8).jpg" alt="" />
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://i.pinimg.com/originals/72/35/64/7235648f32512640e1f68eaaef8ec9b5.png" alt="" />
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://london.bridestory.com/images/c_fill,dpr_1.0,f_auto,fl_progressive,pg_1,q_80,w_680/v1/assets/img_6591-S135wQajL/mario-minardi_isyana-rayhan-wedding1590666825_3.jpg" alt="" />
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://cdn.idntimes.com/content-images/community/2018/03/image1-9beeae437ffeb3fe8db9ab7c926eb764.JPG" alt="" />
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://images.weddingku.com/images/upload/articles/images/osjv4ay44gn310720201107.jpg" alt="" />
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://www.jwmedanwedding.com/wp-content/uploads/2019/12/WhatsApp-Image-2019-12-26-at-18.23.16.jpeg" alt="" />
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://cdn.popbela.com/content-images/post/20191210/72475869-2525329270893630-3861166644841068606-n-ed0cc3e0408e3b497c0d8e7bf67983a7_750x500.jpg" alt="" />
            </a>
        </div>
        </div>
    </div>

    <div class="container text-center">
        <h3>Detail Package</h3>
        <p>Fotografi </p>
        <form method="POST" enctype="multipart/form-data" action="{{ route('create') }}">
            @csrf<div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">id Customer</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="customer" value="{{ $cust->id }}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID Jasa</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="jasa" value="{{ $jasat->id }}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Status</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="status" value="Menunggu Pembayaran">
            </div>
            <div class="d-grid gap-2 col-3 mx-auto">
                
                <b><td>Rp {{ number_format($jasa->harga, 0, ",", ".") }}</td></b>
                <button class="btn btn-warning" name="submit" type="submit">Pesan</button>
            </div>
        </form> 

            
        {{-- <button type="button" class="btn btn-warning">Pesan</button> --}}
    </div>

@endsection

