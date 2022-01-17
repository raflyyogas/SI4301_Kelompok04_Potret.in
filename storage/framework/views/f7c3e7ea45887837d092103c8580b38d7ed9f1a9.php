
<?php $__env->startSection('content'); ?>

    <div class="container ms-5 mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="<?php echo e(asset('images/profile.jpg')); ?>">
                    <span class="font-weight-bold"><?php echo e($cust -> nama); ?></span><span class="text-black-50"><?php echo e($cust -> email); ?></span><span> </span>
                    <a href="<?php echo e(route('Logout')); ?>" class="btn btn-danger" type="button">Keluar</a>
                </div>
            </div>
            <div class="col-md-7 ">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <?php if(session('BerhasilUpdate')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e((session('BerhasilUpdate'))); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                
                    <?php if(session('WrongPass')): ?>
                        <div class="alert alert-failed alert-dismissible fade show" role="alert">
                        <?php echo e((session('WrongPass'))); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                
                    <?php if(session('NotSame')): ?>
                        <div class="alert alert-failed alert-dismissible fade show" role="alert">
                        <?php echo e((session('WrongPass'))); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <form action="/profile" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        
                        <div class="col-md-6" hidden>
                            <label class="labels">ID</label>
                            <input type="text" class="form-control" placeholder="ID" name="id" value="<?php echo e($cust->id); ?>" readonly>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Nama</label><input type="text" class="form-control" placeholder="Nama" name="name" value="<?php echo e($cust->nama); ?>" required></div>
                            <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo e($cust->username); ?>" ></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <input type="text" class="form-control mb-3" placeholder="Email" name="email" value="<?php echo e($cust->email); ?>">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">No HP</label>
                                <input type="number" class="form-control mb-3" placeholder="No Handphone" name="nomor" value="<?php echo e($cust->noHp); ?>">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Alamat</label>
                                <input type="text" class="form-control mb-3" placeholder="Alamat Anda" name="alamat" value="<?php echo e($cust->alamat); ?>">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name ="password">
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Update Profile</button></div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SI4301_Kelompok04_Potret.in\resources\views/user/profile.blade.php ENDPATH**/ ?>