<? 
require_once( "db.php");
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/ubold/layouts/material-horizontal/pages-signin-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 07:46:44 GMT -->
<head>
        <meta charset="utf-8" />
        <title>UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <a href="index.html">
                                        <span><img src="assets/images/logo-dark.png" alt="" height="22"></span>
                                    </a>
                                </div>
								
								<?php
									session_start();
									if(isset($_SESSION['username'])) {
									header('location:index.php'); }
									require_once( "db.php");
									?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="p-sm-3">
                                            <!-- title-->
                                            <h4 class="mt-0">Log In</h4>
                                            <p class="text-muted mb-4">Masukan Username Dan Password Anda</p>
                                            <form action="login.php" method="post">
                                                <div class="form-group mb-3">
                                                    <label for="emailaddress">Username</label>
                                                    <input class="form-control" type="text" name="username" required="" >
                                                </div>
            
                                                <div class="form-group mb-3">
                                                    <label for="password">Password</label>
                                                    <input class="form-control" type="password" required="" name="password" >
                                                </div>
            
                                                <div class="form-group mb-3">
                                                    <button class="btn btn-primary btn-sm float-sm-right" type="submit"> Log In </button>
                                                </div>
    
                                            </form>
                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col-lg-6">
                                        <div class="p-sm-3">
                                            <h4 class="mt-3 mt-lg-0">Daftar Akun</h4>
                                            <p class="text-muted mb-4">Tidak Punya Akun? Silahkan Daftar Dulu</p>

                                            <form action="daftar.php" method="post">
                                                <div class="form-group mb-3">
                                                    <label for="fullname">Nama</label>
                                                    <input class="form-control" type="text" name="nama" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="emailaddress2">Username</label>
                                                    <input class="form-control" type="text" name="username" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="password2">Password</label>
                                                    <input class="form-control" type="password" required name="password">
                                                </div>
                                                <div class="form-group mb-0">
                                                    <button class="btn btn-success btn-sm float-sm-right" type="submit" name="simpan"> Sign Up </button>
                                                    <div class="custom-control custom-checkbox pt-1">
                                                        <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                                        <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div> <!-- end col -->
                                </div>
                                <!-- end row-->

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

       

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/ubold/layouts/material-horizontal/pages-signin-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 07:46:44 GMT -->
</html>