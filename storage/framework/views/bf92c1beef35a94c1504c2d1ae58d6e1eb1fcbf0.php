<?php $__env->startSection('content'); ?>

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">

                            <div class="text-center">
                                    <h2 class="text-dark mb-1 w-1000 text-truncate font-weight-medium">Ders Planla</h2>
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

                <form method="post" action="<?php echo e(route('islem.dersplanla')); ?>">

                    <?php echo csrf_field(); ?>


                    <div class="container col-4 mb-4">

                        <select class="form-select" aria-label="Default select example" name="dersadi">
                            <option selected> Ders Adı </option>
                            <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option value="<?php echo e($lesson->dersName); ?>"><?php echo e(Str::upper($lesson->dersName)); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                </div>

                 <div class="container col-4 ">

                    <select class="form-select" aria-label="Default select example" name="ogretmenadi">
                        <option selected> Ders Hocası </option>
                        <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($teacher->name); ?>"><?php echo e(Str::upper($teacher->name)); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                </div>

                <div class="col-4 text-center container mb-4">

                    <label for="zoomlink" class="form-label" ></label>
                    <input type="text" class="form-control" placeholder="Zoom Link"  name="zoomlink">

               </div>

               <div class="container col-4 ">
                    <input class="date form-control" type="text" placeholder="Tarih" name="date">
               </div>

               <div class="col-4 text-center container">

                <label for="saat" class="form-label" ></label>
                <input type="text" class="form-control" placeholder="Saat"  name="saat">

           </div>







                   <div class="text-center m-3">
                    <button type="submit" class="btn btn-primary">Ders Kaydet </button>
                   </div>

                </form>

                <script type="text/javascript">
                    $('.date').datepicker({
                       format: 'dd-mm-yy'
                     });
                </script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make("Admin.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atamalobisi-Murat\resources\views/MuratAdmin/adminSideFront/dersPlanla.blade.php ENDPATH**/ ?>