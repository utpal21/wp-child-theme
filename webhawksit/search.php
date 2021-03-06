<?php
/**
 * The template for displaying search results pages.
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
                  <h1>Search Result</h1>                               
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
	            	<div class="ec-blog ec-blog-large"> 
	            		<ul class="row">
	            		<?php if ( have_posts() ) : ?> 
	            			<?php while ( have_posts() ) : the_post(); ?>
	            			<li class="col-md-12"> 
	            				<div class="ec-blog-grid-wrap"> 
	            				<?php if( has_post_thumbnail()){?>
	            					<figure><a href="<?php echo esc_url(get_permalink());?>">
	            					<?php the_post_thumbnail(); ?> 
	            					<a href="#" class="ec-largehover"><span><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/plus-icon.png"></span></a></figure>
	            					<?php } else {?>
	            					<figure><a href="<?php echo esc_url(get_permalink());?>">
	            					<img alt="" src="<?php echo get_template_directory_uri(); ?>/extra-images/nothumb.jpg"></a> 
	            					<a href="#" class="ec-largehover"><span><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/plus-icon.png"></span></a></figure>
	            					<?php } ?>
	            					<div class="ec-blog-info"> 
	            					 	<time class="ec-bgcolor" datetime="2008-02-14 20:00"><?php the_time('d');?><span><?php the_time('M');?></span></time>

		            					<div class="ec-inner-info"> 
		            					  <h3><a href="<?php echo esc_url(get_permalink());?>"><?php the_title(); ?></a></h3>
		            					   <ul class="ec-blog-option"> 
		            					   	<li><i class="fa fa fa-list"></i> <a class="ec-colorhover" href="#">By: <?php the_author();?></a></li>
		            					    </ul>

	            					     <p><?php ketoki_readmore(40); ?> <a href="<?php echo esc_url(get_permalink());?>" class="ec-color">Readmore</a></p>
	            					    </div> 
	            					</div> 
	            				</div> 
	            			</li>
	            			<?php endwhile;

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
