<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title(); ?></title>
        <!-- <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico"> -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">

        <?php wp_head()?>
    </head>
    <body class="
        <?php 
            if(wp_is_mobile()) echo ' mobile';
            //echo pll_current_language();
        ?>
    ">
       <header>
           <nav class="navbar" role="navigation">
               <?php 
                   $locatioin = 'header-menu';
                   //if(wp_is_mobile()) $locatioin = 'mobile-menu';
                   
                   $head_navigation = array(
                       'theme_location'  => $locatioin,
                       'menu'            => '',
                       'container'       => false,
                       'container_class' => '',
                       'container_id'    => '',
                       'menu_class'      => 'menu-list',
                       'menu_id'         => '',
                       'echo'            => true,
                       'fallback_cb'     => false,
                       'before'          => '',
                       'after'           => '',
                       'link_before'     => '',
                       'link_after'      => '',
                       'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                       'depth'           => 0,
                       'walker'          => new Bootsrap_basic(),
                   );
                               
                   wp_nav_menu( $head_navigation );
               ?>
           </nav>
       </header> <!-- /.header -->

