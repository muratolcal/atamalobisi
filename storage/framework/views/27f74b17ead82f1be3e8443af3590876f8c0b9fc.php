<?php $__env->startSection('content'); ?>

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">

                            <div class="text-center">
                                    <h2 class="text-dark mb-1 w-1000 text-truncate font-weight-medium">
                                        <?php if(Cache::get('option') == Null): ?>

                                        Liste
                                        <?php endif; ?>

                                        <?php if(Cache::get('option') == 1): ?>

                                        Öğrenci Listesi

                                        <?php endif; ?>
                                        <?php if(Cache::get('option') == 2): ?>

                                        Öğretmen Listesi

                                        <?php endif; ?>

                                        <?php if(Cache::get('option') == 3): ?>

                                        Ders Listesi

                                        <?php endif; ?>
                                    </h2>
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



                <form method="post" action="<?php echo e(route('islem.listeleme')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="container col-5">

                        <select class="form-select" aria-label="Default select example" name="option">
                            <option selected>Seçiniz...</option>
                            <option value="1">Öğrenci Listesi</option>
                            <option value="2">Öğretmen Listesi</option>
                            <option value="3">Ders Listesi</option>
                          </select>

                          <div class="text-center m-3">
                            <button type="submit" class="btn btn-primary">Göster</button>
                            </div>
                </div>
            </form>

            <?php if(Cache::get('option') == 1): ?>

           

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">İsim Soyisim</th>
                    <th scope="col">TC No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Şifre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <?php $__currentLoopData = $ogrenci; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $liste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <td><?php echo e($liste->id); ?></td>
                        <td><?php echo e(Str::upper($liste->name)); ?></td>
                        <td><?php echo e($liste->tcno); ?></td>
                        <td><?php echo e($liste->phone); ?></td>
                        <td><?php echo e($liste->email); ?></td>
                        <td><?php echo e($liste->password); ?></td>

                    </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




            <?php endif; ?>

            <?php if(Cache::get('option') == 2): ?>


            
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">İsim Soyisim</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Şifre</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>

                        <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $liste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <td><?php echo e($liste->id); ?></td>
                        <td><?php echo e(Str::upper($liste->name)); ?></td>
                        <td><?php echo e($liste->email); ?></td>
                        <td><?php echo e($liste->phone); ?></td>
                        <td><?php echo e($liste->password); ?></td>

                    </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>

            <?php endif; ?>

            <?php if(Cache::get('option') == 3): ?>


            
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Ders Adı</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>

                        <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $liste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <td><?php echo e($liste->id); ?></td>
                        <td><?php echo e(Str::upper($liste->dersName)); ?></td>

                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>




            <?php endif; ?>


            <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
            </script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make("Admin.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atamalobisi-Murat\resources\views/MuratAdmin/adminSideFront/listeleme.blade.php ENDPATH**/ ?>