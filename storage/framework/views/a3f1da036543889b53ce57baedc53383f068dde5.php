
<?php $__env->startSection('content'); ?>

<div class="container mt-3 mb-5">
    <p class="text-center text-black"><strong>Upload bukti pembayaran</strong></p>
    <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('uploadbukti')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ID Transaction</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="id" value="<?php echo e($transaksi->id); ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="harga" value="<?php echo e($transaksi->harga); ?>" readonly
        </div>
        <div class="mb-3" hidden>
            <label for="exampleFormControlInput1" class="form-label">Status</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="status" value="Menunggu Konfirmasi" readonly>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" name="image" id="formFile">
        </div>
        <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-primary" name="submit" type="submit">Upload bukti pembayaran</button>
        </div>
    </form> 
</div>

<br><br><br><br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SI4301_Kelompok04_Potret.in\resources\views/bukti.blade.php ENDPATH**/ ?>