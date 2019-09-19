<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/icons/favicon.ico" />

    <!--  
    Document Title
    =============================================
    -->
    <title><?php echo $post->post_title . " | ". get_bloginfo('name');?></title>
    
    <?php 
    wp_head();
    $url = wp_upload_dir();
    global $datasource_table;
    



?>
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

   
   
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/lib/flexslider/flexslider.css" rel="stylesheet">

    <!-- Main stylesheet and color file-->
    <link href="<?php echo get_stylesheet_directory_uri();?>/style.css" rel="stylesheet">


<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.pannellum.org/2.4/pannellum.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.pannellum.org/2.4/pannellum.css">
<script>
    // Wordpress PHP variables to render into JS at outset.
    var active_id = <?php echo $post->ID?>;
    var active_object = "<?php echo $post->post_type?>";
    var home_page = <?php echo get_option( 'page_on_front' );?>;
    var site_title = "<?php echo get_bloginfo('name');?>";
    var json_path = "<?php echo get_stylesheet_directory_uri();?>/data/";
    var uploads_path =  "<?php echo $url['baseurl']?>/";


</script>

  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    
      <div class="page-loader">
        <div class="loader"><?php include "images/SplashLogo-01.svg";?></div>
      </div>
      <?php //die()?>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand header-logo" href="/"><img src="/wp-content/uploads/2019/08/NGO-Committee-on-UNICEF-Logo-White.svg" alt=""></a>
          </div>≈
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right" id="header-menu">
            <?php dynamic_sidebar( 'header-menu' ); ?>
            </ul>
          </div>
        </div>
      </nav>
    
