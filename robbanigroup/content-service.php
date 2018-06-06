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
<li id="post-<?php the_ID(); ?>" class="col-md-12" <?php post_class(); ?>>
   <div class="team-wrap">
      <figure>
         <a href="<?php echo esc_url(get_permalink());?>"><?php the_post_thumbnail(); ?></a>
         <figcaption></figcaption>
      </figure>
      <div class="ec-teaminfo">
         <h6><a href="<?php echo esc_url(get_permalink());?>"><?php the_title();?></a></h6>
         <p><?php ketoki_readmore(20); ?></p>
         <div class="ec-short-section">  <a class="ec-teammore ec-color" href="<?php echo esc_url(get_permalink());?>">Readmore</a> </div>
      </div>
   </div>
</li>
<?php// twentyfifteen_entry_meta(); ?>
<?php //edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	