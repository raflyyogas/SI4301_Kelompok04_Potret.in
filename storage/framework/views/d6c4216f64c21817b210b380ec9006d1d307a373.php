
<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <?php if(session('bukti')): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e((session('bukti'))); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
            <div class="rounded">
                <div class="table-responsive table-borderless">
                    <table class="table">
                    <thead>
                        <tr>
                        <th>Order Id</th>
                        <th>ID Jasa</th>
                        <th>ID Cust</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                        <th>Total</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($transaksi->id); ?></td>
                                <td> <?php echo e($transaksi->idJasa); ?> </td>
                                <td><?php echo e($transaksi->idCust); ?></td>
                                <td>
                                    <?php if($transaksi->status == 'Pembayaran Berhasil'): ?>
                                        Transaksi Sedang Berjalan
                                    <?php elseif($transaksi->status == 'Menunggu Konfirmasi'): ?>
                                        Menunggu Konfirmasi
                                    <?php else: ?>
                                        <?php echo e($transaksi->status); ?>

                                    <?php endif; ?>
                                </td>
                                <td><img src="<?php echo e(asset('img/buktipembayaran/'.$transaksi->bukti_pembayaran)); ?>" alt="Gambar Vendor"></td>
                                <td><strong>Rp <?php echo e(number_format($transaksi->harga, 0, ",", ".")); ?></strong></td>
                                <td>
                                    <?php if($transaksi->status == 'Pembayaran Berhasil'): ?>
                                        <a href="" class="btn btn-success" role="button">Kirim bukti Pembayaran</a>
                                    <?php elseif($transaksi->status == 'Menunggu Konfirmasi'): ?>
                                        <a href="" class="btn btn-warning" role="button">Menunggu Konfirmasi</a>
                                    <?php elseif($transaksi->status == 'Menunggu Pembayaran'): ?>
                                        <a href="/cart/upload/<?php echo e($transaksi->id); ?>" class="btn btn-danger" role="button">Kirim bukti Pembayaran</a>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SI4301_Kelompok04_Potret.in\resources\views/cart.blade.php ENDPATH**/ ?>