<?php
/**
 * Template Name: Company Page
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
                     <div class="col-md-12">
                        <div class="ec-blog ec-blog-grid">
                           <ul class="row">

                              <?php if( have_posts() ): 
                              $args = array('post_type'=>'companis','post_per_page'=>6,'order'=>'ASC');
                              $loop = new WP_Query($args);
                                 while( $loop->have_posts() ): $loop->the_post();
                                 get_template_part( 'content', get_post_format() );
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
                        <!--<ul class="ec-pagination">
                           <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                           <li><a href="#">1</a></li>
                           <li class="active"><a href="#">2</a></li>
                           <li><a href="#">3</a></li>
                           <li><a href="#">4</a></li>
                           <li><a href="#">5</a></li>
                           <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php get_footer(); ?>