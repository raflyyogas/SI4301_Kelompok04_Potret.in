
<?php $__env->startSection('content'); ?>
        <div class="container mt-5">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <h3 class="dataService"><b>Add Service</b></h3>
                <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('nambahjasa')); ?>">
                    <?php echo csrf_field(); ?><div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Vendor</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="vendor" value="<?php echo e($vendor->id); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Jasa</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" name="image" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ketegori</label>
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check form-check-inline ms-3">
                                <input class="form-check-input" type="radio" value="<?php echo e($kategori->id); ?>" id="flexCheckDefault" name="kategori">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <?php echo e($kategori->jenis); ?>

                                </label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button class="btn btn-warning" name="submit" type="submit">ADD SERVICE +</button>
                    </div>
                </form> 
            </div>    
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SI4301_Kelompok04_Potret.in\resources\views/vendor/create.blade.php ENDPATH**/ ?>