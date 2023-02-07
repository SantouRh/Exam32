<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assetsLog/fonts/icomoon/style.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assetsLog/css/owl.carousel.min.css') ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assetsLog/css/bootstrap.min.css') ?>">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url('assetsLog/css/style.css') ?>">

    <title>Login Form</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image:<?php echo "url('".base_url('assetsLog/images/bg_1.jpg')."')" ?>;"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Sign In <strong>Takalo-Takalo</strong></h3>
            <form action="<?php echo base_url('user_controller/entrerUser')?>" method="get">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="your-email@gmail.com" id="username" value="admin">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Your Password" id="password" value="admin">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            </form>
            <p style="margin-top: 5%;">
              <form action="<?php echo site_url('welcome/sign') ?>">
                <input type="submit" value="Sign In" class="btn btn-block btn-primary">
              </form>
            </p>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="<?php echo base_url('assetsLog/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assetsLog/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assetsLog/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assetsLog/js/main.js') ?>"></script>
  </body>
</html>