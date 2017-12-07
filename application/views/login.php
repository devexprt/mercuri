<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Page</title>
    <base href="<?php echo base_url(); ?>">
    <link href="assets/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/admin/css/animate.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <link href="assets/admin/css/colors/default.css" id="theme" rel="stylesheet">
               <link rel="stylesheet" type="text/css" href="assets/admin/css/editor.css">
             <link rel="stylesheet" href="assets/admin/css/chosen.css">
    <link rel="stylesheet" href="assets/admin/css/bootstrap-tagsinput.css">
</head>

<body>
<section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <form class="form-horizontal " id="loginform" method="post" action="<?php echo base_url(); ?>Main/login">
                     <div class="col-xs-12">   <h3 class="box-title m-b-20">Sign In</h3>
                     </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" name="email" type="text" autocomplete="off" required="" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" autocomplete="off"  name="password" required="" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                  
                
                </form>
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
     <script src="assets/admin/plugins/components/jquery/dist/jquery.min.js"></script>
    <script src="assets/admin/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/admin/js/sidebarmenu.js"></script>
    <script src="assets/admin/js/jquery.slimscroll.js"></script>
    <script src="assets/admin/assets/admin/js/waves.js"></script>
    <script src="assets/admin/js/custom.js"></script>


    </body>
    </html>