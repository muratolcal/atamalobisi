<?php $__env->startSection('content'); ?>

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">

                            <div class="text-center">
                                    <h2 class="text-dark mb-1 w-1000 text-truncate font-weight-medium">PDR ÖABT</h2>

                            </div>
                        </div>
                    </div>
                </div>



                <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                        <th scope="col">Ders Adı</th>
                        <th scope="col">Ders Hocası</th>
                        <th scope="col">Tarih</th>
                        <th scope="col">Saat</th>
                        <th scope="col">Ders Linki</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <?php $__currentLoopData = $zoom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zooms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <?php if($zooms->dersName == 'PDR ÖABT'): ?>



                            <td><?php echo e(Str::upper($zooms->dersName)); ?></td>
                            <td><?php echo e(Str::upper($zooms->teacherName)); ?></td>
                            <td><?php echo e($zooms->date); ?></td>
                            <td><?php echo e($zooms->saat); ?></td>
                            <td><input type="submit" class="btn btn-success" value="Gönder" onclick="window.location='<?php echo e($zooms->zoomLink); ?>'"/></td>

                             <?php endif; ?>
                        </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </table>




<?php $__env->stopSection(); ?>

<?php echo $__env->make("Admin.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atamalobisi-Murat\resources\views/MuratAdmin/lessonsList/pdröabt.blade.php ENDPATH**/ ?>