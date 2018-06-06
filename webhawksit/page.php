<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package ketoki
 * @since ketoki 1.0
 */

get_header(); ?>
<div class="ec-minheader"> 
   <div class="ec-minheader-wrap"> <span class="full-pattren"></span> 
      <div class="container"> 
         <div class="row"> 
            <div class="col-md-12">
               <div class="ec-page-title"> 
                  <h1><?php the_title(); ?></h1>                               
               </div> 
            </div>
            <div class="col-md-12">
                <?php ketoki_breadcrumbs(); ?>
            </div> 
            </div>
      </div> 
   </div>
</div>


<div class="ec-main-content">
   <div class="ec-main-section ec-main-space">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="ec-detail">
                 
                  <div class="ec-detail-editor">
                    <?php 
                    	while(have_posts()): the_post();
                    	the_content();
                    ?>
                    <?php if(!is_page('cart') && !is_page('checkout') && !is_page('checkout') && !is_page('my-account')){  ?>
                     <!--<div id="eccomments">
                        <div class="ec-main-title">
                           <h2><?php// echo get_comments_number(); ?></h2>
                        </div>
                       <?php

	                      // if ( comments_open() || get_comments_number() ) :
							//	comments_template();
							//endif;
                    	?>
                     </div>-->

                      <?php
                  }
                    endwhile;
                    ?>
                  </div>
               </div>
            </div>
            <?php get_sidebar();?>
         </div>
      </div>
   </div>
</div>


<?php get_footer(); ?>