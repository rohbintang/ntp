<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="<?php echo base_url('assets/backend/css/bootstrap.css') ?>" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }

        </style>
        <link href="<?php echo base_url('assets/backend/css/bootstrap-responsive.css') ?>" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/backend/ico/favicon.png') ?>">
    </head>

    <body>
<center><h1>Developer</h1></center>
        <div class="container">
            <form class="form-signin" name="login" action="<?php echo base_url('developer/auth/login'); ?>" method="POST">
                <div class="row-fluid">
                <!--<h2 class="form-signin-heading text-center">Login</h2>-->
                <img class="text-center" src="<?php echo base_url('assets/backend/img/logo.png'); ?>" style="margin-bottom: 10px;margin-left: 50px;margin-right: 50px;" />
                <input name="username" type="text" class="input-block-level" placeholder="Username">
                <input name="password" type="password" class="input-block-level" placeholder="Password">
                <button class="btn btn-large btn-block" type="submit">Login</button>
                </div>
            </form>

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url('assets/backend/js/jquery.js') ?>"></script>
        <script src="<?php echo base_url('assets/backend/js/bootstrap-transition.js') ?>"></script>
        <script src="<?php echo base_url('assets/backend/js/bootstrap-alert.js') ?>"></script>
        <script src="<?php echo base_url('assets/backend/js/bootstrap-modal.js') ?>"></script>
        <script src="<?php echo base_url('assets/backend/js/bootstrap-dropdown.js') ?>"></script>
        <script src="<?php echo base_url('assets/backend/js/bootstrap-scrollspy.js') ?>"></script>
        <script src="<?php echo base_url('assets/backend/js/bootstrap-tab.js') ?>"></script>
        <script src="<?php echo base_url('assets/backend/js/bootstrap-tooltip.js') ?>"></script>
        <script src="<?php echo base_url('assets/backend/js/bootstrap-popover.js') ?>"></script>
        <script src="<?php echo base_url('assets/backend/js/bootstrap-button.js') ?>"></script>
        <script src="<?php echo base_url('assets/backend/js/bootstrap-collapse.js') ?>"></script>
        <script src="<?php echo base_url('assets/backend/js/bootstrap-carousel.js') ?>"></script>
        <script src="<?php echo base_url('assets/backend/js/bootstrap-typeahead.js') ?>"></script>

    </body>
</html>
