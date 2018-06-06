
<?php
/**
 * Template Name: Home Page
 *
 * @package ketoki * 
 * @since ketoki 1.0
 */

 get_header(); ?>
         <div class="ec-mainbanner">
            <div class="ec-loading-section"></div>
            <div class="flexslider">
               <ul class="slides">
               <?php 
                           $args =  array(
                              'post_type' => 'h-slides',
                              'post_per_page'   => '-1',
                              'order'  => 'ASC'
                              );
                           $kloop = new WP_Query($args);
                           while ($kloop->have_posts()): $kloop->the_post();
                           //$icon_img = get_post_meta($post->ID,'services_icon','true');
                           ?>
                  <li>
                     <img src="<?php echo get_template_directory_uri(); ?>/extra-images/banner-1.jpg" alt="" /><span class="ec-line-pattren"></span>
                     <div class="ec-caption">
                        <div class="container">
                           <div class="caption-left-section">
                              <h1 class="ec-bgcolor"><?php the_title(); ?></h1>
                              <div class="clearfix"></div>
                             <div class="slide-exc">
                            <?php the_excerpt();?>                             
                             </div>                              
                              <div class="clearfix"></div>
                              <a href="<?php the_permalink();?>" class="ec-bgcolor">Read More</a> 
                           </div>
                           <div class="caption-right-section">
                              <?php the_post_thumbnail(); ?>

                           </div>
                        </div>
                     </div>
                  </li>
                   <?php
                           endwhile;
                           ?> 
                  <!-- <li>
                     <img src="<?php echo get_template_directory_uri(); ?>/extra-images/banner-2.jpg" alt="" /> <span class="ec-line-pattren"></span> 
                     <div class="ec-caption">
                        <div class="container">
                           <div class="caption-left-section">
                              <h1 class="ec-bgcolor">Ticket Booking</h1>
                              <div class="clearfix"></div>
                              <div class="as-captiontitle"> <span>LOREM IPSUM DOLLAR</span> </div>
                              <div class="clearfix"></div>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                              <div class="clearfix"></div>
                              <a href="#" class="ec-bgcolor">Read More</a> 
                           </div>
                           <div class="caption-right-section"><img src="<?php echo get_template_directory_uri(); ?>/extra-images/banner-thumb2.png" alt=""></div>
                        </div>
                     </div>
                  </li> -->
               </ul>
            </div>
         </div>
         <div class="ec-main-content">
            <div class="ec-main-section ec-main-service-two">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="ec-fancy-title">
                           <h2>SerVices We Offer</h2>
                           <div class="clearfix"></div>                         
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="ec-service ec-service-two">
                           <ul class="row">
                           <?php 
                           $args =  array(
                              'post_type' => 'servic-offer',
                              'post_per_page'   => '3',
                              'order'  => 'ASC'
                              );
                           $kloop = new WP_Query($args);
                           while ($kloop->have_posts()): $kloop->the_post();
                           $icon_img = get_post_meta($post->ID,'services_icon','true');
                           ?>
                           <li class="col-md-4">
                              <div class="ec-service-wrap">
                              <?php if($icon_img!==" "){?>
                                 <i class="ec-color <?php echo $icon_img; ?>"></i>
                                 <?php }else{ ?>
                                     <i class="ec-color fa fa-paper-plane"></i>
                                 <?php } ?> 
                                 <h6><?php the_title(); ?></h6>
                                 <p><?php the_excerpt(); ?></p>
                                 <a href="<?php the_permalink(); ?>" class="ec-nextarrow ec-bgcolor fa fa-angle-right"></a> 
                              </div>
                           </li>
                           <?php
                           endwhile;
                           ?>                             
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="ec-main-section not-fullscreen background parallax ec-prallex-bg" data-diff="100" data-img-height="1080" data-img-width="1920">
               <span class="ec-transparent-bg"></span> 
               <div class="container-full">
                  <div class="col-md-12">
                     <div class="ec-fancy-title ec-white-title">
                        <h2>RECENT PRODUCTS</h2>
                        <div class="clearfix"></div>                       
                     </div>
                     <!-- <div class="ec-shop ec-shop-list">
                           <ul class="row"> -->
                           <?php echo do_shortcode('[featured_products per_page="8" columns="4"]');?>
                                                         
                          <!--  </ul>
                        </div> -->
                  </div>
                 <!--  <ul class="portfolio-filter">
                     <li><a class="active" href="#" data-filter="*">All </a></li>
                     <li><a href="#" data-filter=".jquery">Projects</a></li>
                     <li><a href="#" data-filter=".php">Buildings</a></li>
                     <li><a href="#" data-filter=".wordpress">Tiling</a></li>
                     <li><a href="#" data-filter=".jquery">Interior Design</a></li>
                  </ul>
                  <div class="ec-portfolio ec-modren">
                     <div class="portfolio-items">
                        <ul class="row gallery">
                           <li class="col-md-3 jquery">
                              <figure>
                                 <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/extra-images/portfolio-full-1.jpg" alt=""></a> 
                                 <figcaption>
                                    <div class="port-icon">
                                       <a href="#" class="ec-port-icon fa fa-anchor"></a> 
                                       <h3><a href="#">Garden Renovation</a></h3>
                                       <span>48 Projects Done</span> 
                                    </div>
                                 </figcaption>
                              </figure>
                           </li>
                           <li class="col-md-3 wordpress">
                              <figure>
                                 <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/extra-images/portfolio-full-2.jpg" alt=""></a> 
                                 <figcaption>
                                    <div class="port-icon">
                                       <a href="#" class="ec-port-icon fa fa-anchor"></a> 
                                       <h3><a href="#">Garden Renovation</a></h3>
                                       <span>48 Projects Done</span> 
                                    </div>
                                 </figcaption>
                              </figure>
                           </li>
                           <li class="col-md-3 php">
                              <figure>
                                 <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/extra-images/portfolio-full-3.jpg" alt=""></a> 
                                 <figcaption>
                                    <div class="port-icon">
                                       <a href="#" class="ec-port-icon fa fa-anchor"></a> 
                                       <h3><a href="#">Garden Renovation</a></h3>
                                       <span>48 Projects Done</span> 
                                    </div>
                                 </figcaption>
                              </figure>
                           </li>
                           <li class="col-md-3 jquery">
                              <figure>
                                 <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/extra-images/portfolio-full-4.jpg" alt=""></a> 
                                 <figcaption>
                                    <div class="port-icon">
                                       <a href="#" class="ec-port-icon fa fa-anchor"></a> 
                                       <h3><a href="#">Garden Renovation</a></h3>
                                       <span>48 Projects Done</span> 
                                    </div>
                                 </figcaption>
                              </figure>
                           </li>
                           <li class="col-md-3 php">
                              <figure>
                                 <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/extra-images/portfolio-full-5.jpg" alt=""></a> 
                                 <figcaption>
                                    <div class="port-icon">
                                       <a href="#" class="ec-port-icon fa fa-anchor"></a> 
                                       <h3><a href="#">Garden Renovation</a></h3>
                                       <span>48 Projects Done</span> 
                                    </div>
                                 </figcaption>
                              </figure>
                           </li>
                           <li class="col-md-3 wordpress">
                              <figure>
                                 <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/extra-images/portfolio-full-6.jpg" alt=""></a> 
                                 <figcaption>
                                    <div class="port-icon">
                                       <a href="#" class="ec-port-icon fa fa-anchor"></a> 
                                       <h3><a href="#">Garden Renovation</a></h3>
                                       <span>48 Projects Done</span> 
                                    </div>
                                 </figcaption>
                              </figure>
                           </li>
                           <li class="col-md-3 jquery">
                              <figure>
                                 <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/extra-images/portfolio-full-7.jpg" alt=""></a> 
                                 <figcaption>
                                    <div class="port-icon">
                                       <a href="#" class="ec-port-icon fa fa-anchor"></a> 
                                       <h3><a href="#">Garden Renovation</a></h3>
                                       <span>48 Projects Done</span> 
                                    </div>
                                 </figcaption>
                              </figure>
                           </li>
                           <li class="col-md-3 php">
                              <figure>
                                 <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/extra-images/portfolio-full-8.jpg" alt=""></a> 
                                 <figcaption>
                                    <div class="port-icon">
                                       <a href="#" class="ec-port-icon fa fa-anchor"></a> 
                                       <h3><a href="#">Garden Renovation</a></h3>
                                       <span>48 Projects Done</span> 
                                    </div>
                                 </figcaption>
                              </figure>
                           </li>
                        </ul>
                     </div>
                  </div> -->
                  <div class="ec-more-btn"><a href="<?php echo home_url();?>/shop" class="ec-viewbtn ec-bgcolor">VIEW ALL PRODUCTS <i class="fa fa-angle-double-right"></i></a></div>
               </div>
            </div>
            <div class="ec-main-section ec-main-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="ec-main-title">
                           <h2>why you chose us</h2>
                        </div>
                        <div class="ec-wellcome-text">
                          <?php global $ketoki;
                              if(isset($ketoki['choose-us']) && !empty($ketoki['choose-us'])):
                                    echo $ketoki['choose-us'];

                              endif;
                                 ?>
                           <a href="#" class="ec-bgcolor" data-toggle="modal" data-target="#myModal">get a quick quote</a> 
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="ec-main-title">
                           <h2>Our EXPERTIES</h2>
                        </div>
                        <div class="ec-blog ec-blogmedium">
                           <ul class="row">
                              <?php 
                              if(isset($ketoki['experties-slides']) && !empty($ketoki['experties-slides'])):
                              foreach ($ketoki['experties-slides'] as $exp) {
                                 ?>
                              <li class="col-md-12 clearfix">
                                 <figure> <a href="#"><img src="<?php echo $exp['image']; ?>" alt="<?php echo $exp['title']; ?>"/></a> <a href="#" class="ec-bloghover"><i class="fa fa-angle-double-right"></i></a> </figure>
                                 <div class="ec-blog-text">
                                    <h5><a href="<?php the_permalink(); ?>"><?php echo $exp['title']; ?></a></h5>
                                    <p><?php echo $exp['description'];?> <a href="<?php the_permalink(); ?>" class="ec-color">Read More <i class="fa fa-angle-double-right"></i></a></p>
                                 </div>
                              </li>

                                <?php
                              }
                              endif;
                              ?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>           
            <div class="ec-main-section ec-main-testimonial">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="ec-main-title">
                           <h2>TESTIMONIAL</h2>
                        </div>
                        <div class="flexslider ec-testimonial">
                           <ul class="slides">
                            <?php
                              if(isset($ketoki['testimonial-slides']) && !empty($ketoki['testimonial-slides'])):
                              foreach ($ketoki['testimonial-slides'] as $testi) {
                                 ?>
                             <li>
                                 <div class="ec-testimonial-wrap">
                                    <i class="ec-color"></i> 
                                    <p><?php echo $testi['description'];?><span><?php echo $testi['title'];?></span></p>
                                 </div>
                              </li>

                                <?php
                              }
                              endif;
                              ?>                             
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="ec-main-title">
                           <h2>OUR CLIENTS</h2>
                        </div>
                        <div class="ec-sponsored">
                           <ul class="row">
                            <?php
                              if(isset($ketoki['part-slides']) && !empty($ketoki['part-slides'])):
                              foreach ($ketoki['part-slides'] as $partner) {
                                 ?>
                            <li class="col-md-3"><a target="_blank" href="<?php echo $partner['url']; ?>"><img  height="<?php echo $partner['height']; ?>" width="<?php echo $partner['width']; ?>" class="img-responsive" src="<?php echo $partner['image']; ?>" alt="<?php echo $partner['title']; ?>"></a></li>

                                <?php
                              }
                              endif;
                              ?> 
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div><!--End Testmonial-->            
         </div>
<?php get_footer(); ?>

