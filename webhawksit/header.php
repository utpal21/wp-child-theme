<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php wp_title('|', false, 'right'); ?>   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
         <?php global $ketoki; echo $ketoki['cussty']; ?>
      </style>
       <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div id="home" class="site-top"> <!--Site Top-->
      <div class="head_top">
        <div class="container">
          <div class="top_info">
            <ul>
              <li><a href="mailto:info@webhawksit.com">info@webhawksit.com</a></li>
              <li>Call Us: +8801918000000</li>
            </ul>
          </div>
        </div>
      </div>

        <div class="site-header navbar navbar-default clearfix ">
            <div class="container">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="site-brand " href="<?php echo home_url();?>"><img alt="WebHawks-IT-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsive"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar">
                        <!-- <ul class="nav navbar-nav pull-right navmenu">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#section_portfolio">Portfolio</a></li>
                            <li><a href="#section_sponser">Platform</a></li>
                        </ul> -->

                         <?php
                           $default2 = array(
                            'theme_location'  => 'primary',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'nav navbar-nav pull-right navmenu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => '',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => new ketoki_walker()
                            );
                        wp_nav_menu( $default2 );
                        ?>   
                    </div><!-- /.nav-collapse -->

            </div>
        </div> <!-- .site-header -->           
    </div> <!--End Site Top-->
