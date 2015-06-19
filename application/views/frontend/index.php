<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>NTP Market Place</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="<?php echo base_url('assets/frontend/bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/frontend/prettyPhoto/css/prettyPhoto.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/flexslider.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/font-awesome.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/search.css') ?>">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Header -->
        <?php echo $header; ?>
        <?php echo $content; ?>
        <?php echo $footer; ?>

        <!-- Javascript -->
        <script src="<?php echo base_url('assets/frontend/js/jquery-1.8.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/frontend/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/frontend/js/jquery.flexslider.js') ?>"></script>
        <script src="<?php echo base_url('assets/frontend/js/jquery.tweet.js') ?>"></script>
        <script src="<?php echo base_url('assets/frontend/js/jflickrfeed.js') ?>"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?php echo base_url('assets/frontend/js/jquery.ui.map.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/frontend/js/jquery.quicksand.js') ?>"></script>
        <script src="<?php echo base_url('assets/frontend/prettyPhoto/js/jquery.prettyPhoto.js') ?>"></script>
        <!--<script src="<?php echo base_url('assets/frontend/js/scripts.js') ?>"></script>-->
        <script>
        $(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
});
        </script>
    </body>
</html>