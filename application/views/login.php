<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Greetude">

    <title>Login</title>

    <!--Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/custom-css.css" rel="stylesheet" />
</head>

<body class="login-body" style="background-image: url(<?php echo base_url(); ?>assets/images/login_bg.jpg  );">

    <!--header start-->
<header class="header fixed-top clearfix">


  <div class="top-nav clearfix" style="margin-top: 5px;">
    <a href="#"><img src="<?php echo base_url(); ?>assets/images/logo_text.png" alt="" id="logo_header" ></a>
   
  </div>
<!--logo end-->
    <!--search & user info start-->

</header>
<!--header end-->

    <div class="container">
      <br><br><br>
      <div ng-app>
        <?php $attributes = array('class' => 'form-signin'); 
          echo form_open_multipart("user/auth",$attributes); ?>
        <h2 class="form-signin-heading" >Sign in now</h2>
        <div class="login-wrap">
          <?php echo validation_errors('<p class="error">'); ?>
            <div class="user-login-info">
               <input name="email" id="email" type="text" class="form-control" placeholder="Email ID" autofocus>
                <input name="pass" id="pass" type="password" class="form-control" placeholder="Password">
                
            </div>
                
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
                <?php  $data = array('class'=>'btn btn-lg btn-login btn-block', 'value'=>'Sign in');
                  echo form_submit($data);
                ?>
                Don't have an account yet?
                <strong><a class="" href="<?php echo base_url(); ?>index.php/user/registration">
                    Create an account
                </a></strong>
        </div>
          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="reemail" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      <?php echo form_close(); ?>
      </div>
    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/bs3/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/angular.min.js" type="text/javascript"></script>
  </body>
</html>
