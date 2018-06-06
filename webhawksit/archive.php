<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @package ketoki * 
 * @since ketoki 1.0
 */

get_header(); ?>
<?php //if ( have_posts() ) : ?>
        <!--  <div class="ec-minheader">
            <div class="ec-minheader-wrap">
               <span class="full-pattren"></span> 
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="ec-page-title">
                           <?php //the_archive_title( '<h1 class="page-title">', '</h1>' );?>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <ul class="ec-breadcrumb">
                           <li><a href="#">Home</a></li>
                           <li class="active"><a href="#"><?php //the_archive_title();?></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
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


<?php get_footer(); ?>
