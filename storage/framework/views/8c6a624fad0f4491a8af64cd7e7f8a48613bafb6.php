
<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="shadow p-3 mb-5 bg-body rounded">
        <h3 class="dataService"><b>Edit Status</b></h3>
            <form method="POST" action="<?php echo e(route('EditStatus')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ID Transaksi</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="idtransaksi" value="<?php echo e($transaksi->id); ?>" readonly="readonly">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">ID Customer</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="idcust" value="<?php echo e($transaksi->idCust); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="harga" value="<?php echo e($transaksi->harga); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Gambar</label>
                        <img src="<?php echo e(asset('img/buktipembayaran/'.$transaksi->bukti_pembayaran)); ?>" alt="Gambar Vendor">
                    </div>
                    <div class="form-group">
                        
                        <label class="mb-0 me-2">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="Pembayaran"
                                value="Pembayaran Berhasil">
                            <label class="form-check-label" for="Pembayaran">Pembayaran Berhasil</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="Menunggu"
                                value="Menunggu Pembayaran">
                            <label class="form-check-label" for="Menunggu">Menunggu Pembayaran</label>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-4 col-3 mx-auto">
                        <button class="btn btn-warning" name="submit" type="submit">EDIT STATUS</button>
                    </div>
            </form> 
        </div>    
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SI4301_Kelompok04_Potret.in\resources\views/vendor/editstatus.blade.php ENDPATH**/ ?>