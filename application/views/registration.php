<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Greetude-Register</title>

    <!--Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/custom-css.css" rel="stylesheet" />
</head>
  <body class="login-body" style="background-image: url('<?php echo base_url(); ?>assets/images/back.jpg'); ">

        <!--header start-->
    <header class="header fixed-top clearfix">


      <div class="top-nav clearfix" style="margin-top: 5px;">
        <a href="#"><img src="<?php echo base_url(); ?>assets/images/logo_text.png" alt="" id="logo_header"/></a>
      </div>
    <!--logo end-->
        <!--search & user info start-->
    </header>
    <!--header end-->

    <div class="container">
        <br><br><br>
      <?php $attributes = array('class' => 'form-signin'); 
          echo form_open_multipart("user/reg",$attributes); ?>
        <h2 class="form-signin-heading">Save Energy Save Money</h2>
        <div class="login-wrap">
            <?php echo validation_errors('<p class="error">'); ?>
            <p><strong>Enter your details below</strong></p>
            <input name="name" id="name" type="text" class="form-control" placeholder="Full Name" autofocus>
            <input name="email" type="text" class="form-control" placeholder="Email" autofocus>
            <input name="pass" type="password" class="form-control" placeholder="Password">
            <input name="con_pass" type="password" class="form-control" placeholder="Confirm Password">
            <input name="number" type="text" class="form-control" placeholder="Phone Number">
            <?php  $data = array('class'=>'btn btn-lg btn-login btn-block', 'value'=>'Submit');
                  echo form_submit($data);
                ?>
            <strong>Already Registered?</strong>
            <strong><a class="" href="<?php echo base_url(); ?>index.php/user/login">
                Login
            </a></strong>
            

        </div>

      <?php echo form_close(); ?>

    </div>


    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/bs3/js/bootstrap.min.js"></script>

  </body>
</html>