        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo e(route('dashboard')); ?>"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Ana Sayfa</span></a></li>


                        <?php echo $__env->make("MuratAdmin.adminWidgets.adminListM", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <form method="get" action="">
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Dersler</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Dersler </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">

                                 <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <li class="sidebar-item"><a href="<?php echo e(route('ders.'.Str::lower(str_replace(" ","",$lesson->dersName)))); ?>" class="sidebar-link"><span
                                    class="hide-menu"> <?php echo e(Str::upper($lesson->dersName)); ?>

                                </span></a>
                                </li>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>

                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Ders Kayıtları </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <li class="sidebar-item"> <a href="form-inputs.html" class="sidebar-link"><span
                                    class="hide-menu"> <?php echo e(Str::upper($lesson->dersName)); ?>

                                </span></a>
                                </li>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>

                    </form>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
<?php /**PATH C:\xampp\htdocs\atamalobisi-Murat\resources\views/Admin/widgets/leftsideBar.blade.php ENDPATH**/ ?>