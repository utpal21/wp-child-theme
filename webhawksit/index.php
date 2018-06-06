<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 * 
 *
 * @package Ketoki
 * @since Ketoki 1.0
 */
get_header();
?>

    <div class="main_container">
      <div class="container">

        <?php if( have_posts() ):
            
            while( have_posts() ): the_post(); 
            $catgory_name = ketoki_get_categories( get_the_ID() ); 
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);  
           
           // get_template_part( 'content', get_post_format() );?>
               <div  class="row port_row" >
                  <div class="col-lg-8">
                     <div class="post_left">                     
                     <img src="<?php echo $thumb_url[0];?>" class="img-responsive">
                     <div class="post_info">
                        <h4><?php echo $catgory_name; ?></h4>
                        <h2><?php echo the_title(); ?></h2>
                     </div>                  
                            
                     </div>
                  </div>
                <div class="col-lg-4">
                  <div class="post_right">

                    <div class="des_lev">
                      <h4 class="first"><img src="<?php echo get_template_directory_uri(); ?>/images/title_bullet.png"> <span>Product Details</span></h4>  
                      <p><?php the_content(); ?></p>
                    </div>

                     <div class="des_lev">
                      <h4><img src="<?php echo get_template_directory_uri(); ?>/images/title_bullet.png">  <span>Technology</span></h4>  
                      <?php ketoki_project_tools(); ?>
                    </div>

                     <div class="des_lev">
                      <h4><img src="<?php echo get_template_directory_uri(); ?>/images/title_bullet.png"> <span> Live Link</span></h4>  
                      <a target="_blank" href="<?php the_field('live_url'); ?>"><?php echo the_title()." "."Live"; ?></a>
                    </div>
                   
                    <div class="des_lev">
                      <h4><img src="<?php echo get_template_directory_uri(); ?>/images/title_bullet.png">  <span>Project Time</span></h4>  
                      <p><?php the_field('project_time'); ?></p>
                    </div>
                    
                  </div>       
                </div>            
            </div>
            <?php
            endwhile;
            else :
               get_template_part( 'content', 'none' );

            endif;
         ?>

         <div class="Post_paginaiton">
               <?php the_posts_pagination(array(
               'prev_text' => __('<','ketoki'),
               'next_text' => __('>','ketoki'),
               'screen_reader_text' => '',
               'before_page_number'   => '',

               ));?> 
         </div>          

      </div>
    </div> 
      
<?php get_footer();?>

