<!DOCTYPE html> 
<html lang="en">
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php wp_title('|',true,'right')?></title>        
      <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]--><style type="text/css">
         <?php global $ketoki; echo $ketoki['cussty']; ?>
      </style>
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
   <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1586413261589350";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
      <div class="ec-main-wrapper <?php if($ketoki['website_layout']==2){echo "wrapper-boxed";}?>">
         <header id="ec-header" class="ec-absolute">
            <div class="ec-social-strip">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <nav class="top-nav">
                         <?php
                            $default2 = array(
                            'theme_location'  => 'topmenu',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'ketoki_default_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                            );
                        wp_nav_menu( $default2 );
                        ?>                         
                        </nav>
                        <?php if(is_user_logged_in()):?>
                        <nav class="top-nav">
                        <ul>
                          <li class="private_li"><a href="<?php echo home_url(); ?>/contacts/">Contacts</a></li>
                        </ul>
                        </nav>
                      <?php endif; ?>
                     </div>
                     <div class="col-md-2">
                        <div class="social-media-cart">                       
                           <ul class="cart_to">                          
                              <?php                                          
                                include_once( ABSPATH . 'wp-admin/includes/plugin.php' );                                         
                                if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) { ?>
                                   <li><a href="<?php echo WC()->cart->get_cart_url(); ?>">
                                 <i style="color:#F26530;" class="fa fa-shopping-cart"></i>  <span class="cartitems"><?php echo sprintf(_n('%d item', '%d Items', WC()->cart->cart_contents_count, 'ketoki'), WC()->cart->cart_contents_count);?></span> - <?php global $woocommerce; echo $woocommerce->cart->get_cart_total(); ?>
                                 </a></li>
                             <?php   } 
                                ?>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="social-media">                       
                           <ul>
                           <?php if($ketoki['social-icon']['1']): ?>
                              <li><a target="_blank" href="<?php echo $ketoki['social-icon']['1']; ?>"><i class="fa fa-facebook"></i></a></li>
                           <?php endif; ?>
                             <?php if($ketoki['social-icon']['2']): ?>
                              <li><a target="_blank" data-original-title="Twitter" href="<?php echo $ketoki['social-icon']['2']; ?>"><i class="fa fa-twitter"></i></a></li>
                              <?php endif; ?>
                              <?php if($ketoki['social-icon']['3']): ?>
                              <li><a target="_blank" data-original-title="Google-Plus" href="<?php echo $ketoki['social-icon']['3']; ?>"><i class="fa fa-google-plus"></i></a></li>
                              <?php endif; ?>
                              <?php if($ketoki['social-icon']['4']): ?>
                              <li><a target="_blank" data-original-title="Dribbble" href="<?php echo $ketoki['social-icon']['4']; ?>"><i class="fa fa-dribbble"></i></a></li>
                              <?php endif; ?>
                              <?php if($ketoki['social-icon']['5']): ?>
                              <li><a target="_blank" data-original-title="Pinterest" href="<?php echo $ketoki['social-icon']['5']; ?>"><i class="fa fa-pinterest-p"></i></a></li>
                              <?php endif; ?>                               
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="ec-topbar">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6"><a href="<?php echo esc_url(home_url());?>" class="ec-logo">                     
                           <img src="<?php  global $ketoki;
                    echo $ketoki['sitelogo']['url'];
                     ?>" alt="<?php bloginfo('title');?>">
                     </a>
                     </div>
                     <div class="col-md-6">
                        <ul class="ec-stripinfo">
                           <li>
                              <i class="ec-color fa fa-clock-o"></i> 
                              <div class="strip-info-text"> <span><?php echo $ketoki['she-day']; ?></span><?php echo $ketoki['she-time']; ?></div>
                           </li>
                           <li>
                              <i class="ec-color fa fa-phone"></i> 
                              <div class="strip-info-text"> <span>Call us now</span> <?php echo $ketoki['mobile']; ?> </div>
                           </li>
                           <li>
                              <i class="ec-color fa fa-map-marker"></i> 
                              <div class="strip-info-text"> <span>Location</span> <a href="<?php echo home_url();?>/contact-us/">See on Map </a></div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="ec-mainheader">
                  <div class="ec-left-section">
                     <nav class="main-navigation">
                     <?php ketoki_nav_menu('primary',''); ?>                      
                     </nav>
                     <div id="as-menu" class="as-menuwrapper">
                        <button class="as-trigger">Open Menu</button> 
                        <?php
                            $default1 = array(
                            'theme_location'  => 'primary',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'as-menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'ketoki_default_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => new ketoki_walker()
                            );
                        wp_nav_menu( $default1 );

                        ?>
                       
                     </div>
                  </div>
                  <a href="#" class="ec-getqoute ec-bgcolor" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i> GET A QUOTE</a>                   
               </div>
            </div>
         </header>
         <?php if(!is_front_page()){ ?>

            <!--<div class="ec-minheader"> 
               <div class="ec-minheader-wrap"> <span class="full-pattren"></span> 
                  <div class="container"> 
                     <div class="row"> 
                        <div class="col-md-12">
                           <div class="ec-page-title"> 
                              <h1><?php// the_title(); ?></h1>                               
                           </div> 
                        </div>
                        <div class="col-md-12">
                            <ul class="ec-breadcrumb">
                             <li><a href="#">Home</a></li> 
                             <li class="active"><a href="#">About Us</a></li>
                           </ul>
                        </div> 
                        </div>
                  </div> 
               </div>
            </div>-->


         <?php } ?>