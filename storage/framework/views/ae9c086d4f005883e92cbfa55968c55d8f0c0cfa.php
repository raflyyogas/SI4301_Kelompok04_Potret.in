<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('fonts/icomoon/style.css')); ?>"/>
    <title>POTRETIN</title>
  </head>
  <body>
    <div class="d-lg-flex half">
      <div class="bg order-1 order-md-2" style="background-image: url(<?php echo e(asset('images/bg_1.jpg')); ?>)"></div>
      <div class="contents order-2 order-md-1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <h3>Masuk <strong>Potret.In</strong></h3>
              <p class="mb-4">Make a moment with us.</p>
              <?php if(session('BerhasilRegist')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?php echo e((session('BerhasilRegist'))); ?>

                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php endif; ?>

              <?php if(session('failed')): ?>
                <div class="alert alert-failed alert-dismissible fade show" role="alert">
                  <?php echo e((session('failed'))); ?>

                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php endif; ?>

              <?php if(session('wrong')): ?>
                <div class="alert alert-failed alert-dismissible fade show" role="alert">
                  <?php echo e((session('wrong'))); ?>

                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php endif; ?>

              <form action="<?php echo e(route('login')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="Masukkan Username Anda" id="username" name="username"/>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password Anda" id="password" name="password" />
                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0">
                    <span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Lupa Password</a></span>
                </div>

                <input type="submit" value="Masuk" class="btn btn-block btn-primary" />
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
<?php /**PATH C:\xampp\htdocs\SI4301_Kelompok04_Potret.in\resources\views/login.blade.php ENDPATH**/ ?>