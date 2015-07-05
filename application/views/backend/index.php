<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="<?php echo base_url('assets/backend/css/bootstrap-cerulean.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/backend/css/bootstrap-responsive.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/backend/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/backend/css/datepicker.css'); ?>" rel="stylesheet">
        
        <script src="<?php echo base_url('assets/backend/js/jquery.js') ?>"></script>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="<?php echo base_url('js/html5shiv.js') ?>"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/backend/ico/favicon.png') ?>">
    </head>

    <body>
        <?php echo $header; ?>
        <div class="container-fluid" style="margin-top: 30px;">
            <div class="row-fluid">
                <?php echo $sidebar; ?>
                <div class="span9">
                    <!--<h3 style="margin-top: 0px;"><?php echo $title ?></h3>-->
                    <!--<ul class="breadcrumb">
                        <li><a href="#">Home</a> <span class="divider">/</span></li>
                        <li><a href="#">Library</a> <span class="divider">/</span></li>
                        <li class="active">Data</li>
                    </ul>-->
                    <ul class="breadcrumb">
                        <?php echo breadcrumb(); ?>
                    </ul>

                    <div class="content well">
                        
                        <?php echo $content; ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
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