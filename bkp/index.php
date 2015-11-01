<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Nancy Sews</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/default.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <? include 'header.php'; ?>

        <div class="body">
          <h1 class="center">Serving Baldwinsville and Liverpool with your sewing needs.</h1>
          <div class="slideshow">
            <img src="img/sewing.png"/>
            <!-- <img src="//placehold.it/1000x300/30AAAA/80AAAA"/> -->
            <!-- main.js for arrows -->
          </div>
          
          <a href="plist.php"> <img src="img/scoutpromo.png" alt="Scout Uniform promotion" style="width: 100px; height: 100px; float: right; padding-left: 10px;"\> </a>
          <a href="dancers.php"><img src="img/dancers.png" alt="Scout Uniform promotion" style="width: 100px; height: 100px; float: right; padding-left: 10px;"\> </a>

          <p><b>Life's too short for a bad fit. </b></p>
          <span style="line-height: 2px;">
            <p>I can help with all sorts of alterations, household sewing and mending. </p>        
            <p>From sewing buttons and recovering cushions to modifying formal wear, I've done it all. </p>
            <p>I also make custom dance costumes.</p>
          </span>
          
          <? require_once("footer.php"); ?>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/vendor/jquery.slides.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
