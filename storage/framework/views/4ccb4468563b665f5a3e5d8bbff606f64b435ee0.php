
<?php $__env->startSection('content'); ?>
    <?php if(session('vendor')): ?>
        <div style="background-color: rgb(238, 161, 20);" id="content">
            <img class="user" src="<?php echo e(asset('img/internal/vendor.png')); ?>" alt="Logo Vendor">
            <h3 class="namaVendor mt-3"><?php echo e($vendor->namaVendor); ?></h3>
        </div>
        <div class="container mt-3">
            <?php if(count($jasa) >= 1): ?>
            <div class="row row-cols-1 row-cols-md-1 g-4">
                <a class="btn btn-primary mt-3" href="/vendor/create" role="button">Tambah Jasa</a>
                <?php $__currentLoopData = $jasa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jasa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col">
                        <div id="card1" class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo e(asset('img/imgvendor/'.$jasa->gambar)); ?>" class="img-fluid rounded-start" alt="Vendor">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($jasa->namaJasa); ?></h5>
                                    <p class="card-text"><?php echo e($jasa->deskripsi); ?></p>
                                    <a href="/vendor/<?php echo e($jasa->id); ?>" class="btn btn-warning">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>       
                <div class="text-center">
                    <div class="text-secondary">There is no data....</div>
                    <a class="btn btn-primary mt-3" href="/vendor/create" role="button">Tambah Jasa</a>
                </div> 
            <?php endif; ?>
            </div>
        </div>
    <?php else: ?>
        <div class="container mt-5 text-center rounded shadow " height="250">
            You're still not login. Please <a href="/vendor/login" class="btn btn-success">Login</a>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SI4301_Kelompok04_Potret.in\resources\views/vendor/index.blade.php ENDPATH**/ ?>