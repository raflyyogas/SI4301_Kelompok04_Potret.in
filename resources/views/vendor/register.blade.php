<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}"/>
    <title>Register Vendor</title>
  </head>
  <body>
    <div class="d-lg-flex half">
      <div class="bg order-1 order-md-2" style="background-image: url({{ asset('images/bg_1.jpg') }})"></div>
      <div class="contents order-2 order-md-1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <h3>Daftar <strong>Potret.In</strong></h3>
              <p class="mb-8">-- Register for Vendor --</p>
              
              @if (session('Failure'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ (session('Failure')) }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <form action="{{ route('vendorregis') }}" method="post">
                @csrf
                <div class="form-group first">
                  <label for="username">Nama Vendor</label>
                  <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" id="username" name="nama"/>
                </div>
                <div class="form-group first">
                  <label for="username">No Handphone</label>
                  <input type="number" class="form-control" placeholder="Masukkan Handphone Anda" id="handphone" name="handphone"/>
                </div>
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input type="text" class="form-control" placeholder="Masukkan Email Anda" id="email" name="email"/>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group last mb-3">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" placeholder="Password Anda" id="password" name="password"/>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group last mb-3">
                      <label for="password">Konfirmasi Password</label>
                      <input type="password" class="form-control" placeholder="Konfirmasi Password" id="password" name="confpw"/>
                    </div>
                  </div>
                </div>
                <input type="submit" value="Daftar" class="btn btn-block btn-primary" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>