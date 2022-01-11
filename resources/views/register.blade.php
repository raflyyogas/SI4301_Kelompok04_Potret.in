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
    <title>POTRETIN</title>
  </head>
  <body>
    <div class="d-lg-flex half">
      <div class="bg order-1 order-md-2" style="background-image: url({{ asset('images/bg_1.jpg') }})"></div>
      <div class="contents order-2 order-md-1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <h3>Daftar <strong>Potret.In</strong></h3>
              <p class="mb-4">Make a momment with us</p>
              @if (session('TidakSama'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ (session('TidakSama')) }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <form action="/register" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group first">
                  <label for="username">username</label>
                  <input type="text" class="form-control" placeholder="Masukkan username Anda" id="username" name="username" />
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group first">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" placeholder="Masukkan email Anda" id="email" name="email" />
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group first">
                      <label for="name">Nama Lengkap</label>
                      <input type="text" class="form-control" placeholder="Nama Lengkap" id="namae" name="name"/>
                    </div>
                  </div>
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
                      <label for="confpw">Konfirmasi Password</label>
                      <input type="password" class="form-control" placeholder="Konfirmasi Password" id="confpw" name="confpw" />
                    </div>
                  </div>
                </div>
                <div class="form-group first">
                  <label for="noHp">Nomor HP</label>
                  <input type="number" class="form-control" placeholder="Masuk nomor Handphone" id="noHp" name="noHp" />
                </div>
                
                <div class="form-group first">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" placeholder="Masukkan alamat lengkap" id="alamat" name="alamat"/>
                </div>
                <input type="submit" value="Daftar" class="btn btn-block btn-primary" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
