<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Ketoki
 * @since Ketoki 1.0
 */
?>

 <div  class="row" >
      <div class="col-lg-8">
         <div class="post_left">
               <?php the_post_thumbnail(); ?>     
         </div>
      </div>
    <div class="col-lg-4">
      <div class="post_right">
        <p><?php ketoki_readmore(20); ?></p>
      </div>       
    </div>            
</div>

<!-- <li id="post-<?php the_ID(); ?>" class="col-md-3" <?php post_class(); ?>>
 <div class="ec-blog-grid-wrap">
    <figure><a href="<?php echo esc_url(get_permalink());?>"><?php the_post_thumbnail(); ?></a> <a class="ec-bloghover" href="<?php echo esc_url(get_permalink());?>"><i class="fa fa-angle-double-right"></i></a></figure>
    <div class="ec-blog-info">
       <h5><a href="<?php echo esc_url(get_permalink());?>"><?php the_title();?></a></h5>
       <div class="ec-inner-info">
          <ul class="ec-blog-option">
             <li><i class="fa fa-calendar"></i><?php the_time('m-d-Y');?></li>
             <li><i class="fa fa-list"></i> <a href="#" class="ec-colorhover"><?php the_author();?></a></li>
          </ul>
          <p><?php ketoki_readmore(20); ?></p>         
         <a class="ec-colorhover pull-right" href="<?php echo esc_url(get_permalink());?>">Read More <i class="fa fa-angle-double-right"></i></a> 
       </div>
    </div>
 </div>
</li> -->
<?php// twentyfifteen_entry_meta(); ?>
<?php //edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	