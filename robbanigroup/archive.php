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
<?php if ( have_posts() ) : ?>
         <div class="ec-minheader">
            <div class="ec-minheader-wrap">
               <span class="full-pattren"></span> 
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="ec-page-title">
                           <?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <ul class="ec-breadcrumb">
                           <li><a href="#">Home</a></li>
                           <li class="active"><a href="#"><?php the_archive_title();?></a></li>
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

                              <?php 
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


<?php get_footer(); ?>
