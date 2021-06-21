<?php $__env->startSection('content'); ?>

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">

                            <div class="text-center">
                                    <h2 class="text-dark mb-1 w-1000 text-truncate font-weight-medium">Öğretmen Ekle</h2>

                            </div>
                        </div>
                    </div>
                </div>

                <?php if($errors->all() != NULL): ?>

                <div class="alert alert-danger text-center col-5 container" role="alert">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <ul>
                        <?php echo e($error); ?>

                    </ul>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </div>

                <?php endif; ?>

                <?php if(Cache::get('email') != NULL && Cache::get('password') != NULL): ?>

                 <div class="alert alert-success text-center col-5 container" role="alert">
                    Kayıt Başarılı
                  </div>

                <?php endif; ?>

                <form method="post" action="<?php echo e(route('islem.ogretmenekle')); ?>">

                    <?php echo csrf_field(); ?>


                <div class="card-group">

                    <div class="mb-4 col-4 text-center container">

                        <label for="isimsoyisim" class="form-label"> Öğretmen İsim-Soyisim  </label>
                        <input type="text" class="form-control" value="<?php echo e(old('isimsoyisim')); ?>" name="isimsoyisim">

                   </div>

                    <div class="mb-4 col-4 text-center container">

                        <label for="telno" class="form-label"> Öğretmen Telefon Numarası </label>
                        <input type="text" class="form-control" name="telno">

                    </div>

                    <div class="mb-4 col-4 text-center container">

                        <label for="email" class="form-label"> Öğretmen Email </label>
                        <input type="email" class="form-control" name="email">

                    </div>

                </div>

                   <div class="text-center">
                    <button type="submit" class="btn btn-primary">Öğretmen Kaydet </button>
                    </div>

                </form>


                <?php if(Cache::get('email') != NULL && Cache::get('password') != NULL): ?>


                <div class="">
                    <div class="mb-3 col-5 container">
                        <label for="">Öğretmen Email</label>
                    <input class="form-control" type="text" aria-label="readonly input example" value="<?php echo e(Cache::get('email')); ?>" readonly>
                    </div>

                    <div class="col-5 container">

                    <label for="">Öğretmen Şifre</label>
                    <input class="form-control" type="text" aria-label="readonly input example" value="<?php echo e(Cache::get('password')); ?>" readonly>

                </div>
                </div>
               <?php endif; ?>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("Admin.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atamalobisi-Murat\resources\views/MuratAdmin/adminSideFront/ogretmenekle.blade.php ENDPATH**/ ?>