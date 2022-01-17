
<?php $__env->startSection('content'); ?>
    <?php if(count($transaksi)>=1): ?>
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="rounded">
                    
                <?php if(session('Succeed')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e((session('Succeed'))); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                <div class="table-responsive table-borderless">
                    <table class="table">
                    <thead>
                        <tr>
                        <th>Order Id</th>
                        <th>ID Jasa</th>
                        <th>ID Cust</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                        <th>Total Harga</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><?php echo e($transaksi->id); ?></td>
                            <td><?php echo e($transaksi->idJasa); ?></td>
                            <td><?php echo e($transaksi->idCust); ?></td>
                            <td><?php echo e($transaksi->status); ?></td>
                            <td> 
                                <?php if($transaksi->bukti_pembayaran == 'NULL'): ?>
                                    Tidak ada pembayaran
                                <?php else: ?>
                                    <img src="<?php echo e(asset('img/buktipembayaran/'.$transaksi->bukti_pembayaran)); ?>" alt="Gambar Vendor">
                                <?php endif; ?>
                            </td>
                            <b><td>Rp <?php echo e(number_format($transaksi->harga, 0, ",", ".")); ?></td></b>
                            <td>
                                <?php if($transaksi->status == 'Pembayaran Berhasil'): ?>
                                    <a href="" class="btn btn-success" role="button">Pembayaran Berhasil</a>
                                <?php elseif($transaksi->status == 'Menunggu Pembayaran'): ?>
                                    <a href="" class="btn btn-warning" role="button">Menunggu Pembayaran</a>
                                <?php elseif($transaksi->status == 'Menunggu Konfirmasi'): ?>
                                    <a href="/vendor/status/edit/<?php echo e($transaksi->id); ?>" class="btn btn-danger" role="button">Edit Status</a>
                                <?php endif; ?>
                            </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>

                    <br><br><br><br>
                </div>
                </div>
            </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container p-5 mx-auto text-center text-black">No Data</div>
        <br><br><br><br><br>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('vendor.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SI4301_Kelompok04_Potret.in\resources\views/vendor/status.blade.php ENDPATH**/ ?>