<li  class="col-md-12" >
 <div class="ec-blog-grid-wrap">   
    <div class="ec-blog-info">
      <h1><?php _e( 'Nothing Found', 'ketoki' ); ?></h1>
       <div class="ec-inner-info">
            <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'ketoki' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

            <?php elseif ( is_search() ) : ?>

            <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'ketoki' ); ?></p>
            <?php get_search_form(); ?>

            <?php else : ?>

            <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'ketoki' ); ?></p>
            <?php get_search_form(); ?>

            <?php endif; ?>
       </div>
    </div>
 </div>
</li>