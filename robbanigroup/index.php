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
         <div class="ec-minheader">
            <div class="ec-minheader-wrap">
               <span class="full-pattren"></span> 
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="ec-page-title">
                           <h1>Blog</h1>                           
                        </div>
                     </div>
                     <div class="col-md-12">
                        <ul class="ec-breadcrumb">
                           <li><a href="#">Home</a></li>
                           <li class="active"><a href="#">Blog</a></li>
                        </ul>
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
                                 while( have_posts() ): the_post();
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
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php get_footer();?>

