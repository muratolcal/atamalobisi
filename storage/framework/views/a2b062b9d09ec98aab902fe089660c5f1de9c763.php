<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Atama Lobisi</title>
    <!-- Custom CSS -->
    <link href="admin/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative">
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="assets\images\unnamed.jpg" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">Giriş Yap</h2>
                        <p class="text-center">Giriş yapmak için sizlere verilen bilgileri kullanabilirsiniz.</p>
                        <form class="mt-4" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="email">E-mail ya da TC NO</label>
                                        <input class="form-control" id="email" name="email" type="email"
                                            placeholder="Lütfen E-mail ya da TC NO giriniz.">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="password">Şifre</label>
                                        <input class="form-control" id="password" name="password" type="password"
                                            placeholder="Lütfen şifrenizi giriniz.">
                                    </div>
                                </div>
                                <div class="col-3 container text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Giriş Yap</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="admin/assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="admin/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="admin/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\atamalobisi-Murat\resources\views/login.blade.php ENDPATH**/ ?>