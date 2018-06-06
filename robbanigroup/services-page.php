<?php
/**
 * Template Name: Services Page
 *
 * @package ketoki * 
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
            <div class="ec-main-section ec-bottom-padng">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8">
						<div class="ec-team ec-team-medium">
						   <ul class="row">						     
						      <?php if( have_posts() ): 
                              $args = array('category_name'=>'service','post_per_page'=>-1,'order'=>'DESC');
                              $loop = new WP_Query($args);
                                 while( $loop->have_posts() ): $loop->the_post();
                                 get_template_part( 'content', 'service');
                                 endwhile;
                                 else :
                                    get_template_part( 'content', 'none' );

                                 endif;
                              ?>     
						   </ul>
						</div>
                        <?php the_posts_pagination(array(
                           'prev_text' => __('<','ketoki'),
                           'next_text' => __('>','ketoki'),
                           'screen_reader_text' => '',
                           'before_page_number'   => '',

                        ));?>                       
                     </div>
                     <?php get_sidebar(); ?>
                  </div>
               </div>
            </div>
         </div>
<?php get_footer(); ?>