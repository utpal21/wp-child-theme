<?php
/**
 * Template Name: Coupons Home Template
 *
 * @package Clipper\Templates
 * @author  AppThemes
 * @since   Clipper 1.5
 */

// Featured Slider
// if ( $clpr_options->featured_slider ) {
// 	get_template_part( 'featured' );
// }

// $post_status = ( $clpr_options->exclude_unreliable ) ? array( 'publish' ) : array( 'publish', 'unreliable' );
// $posts_count = appthemes_count_posts( APP_POST_TYPE, $post_status );
?>

<?php




$terms = get_terms( 'coupon_category' );
 if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
     echo '<ul>';
     foreach ( $terms as $term ) {
       echo '<li>' . $term->name . '</li>';
        
     }
     echo '</ul>';
 }

?>

<?php
/*
$taxonomies = get_taxonomies(); 
foreach ( $taxonomies as $taxonomy ) {
    echo '<p>' . $taxonomy . '</p>';
}
*/
?>


<div class="top_custome_cupone clearfix">
	<div class="cpn_wrp frame">
		<?php 
		$args = array('post_type' => 'couponh', 'posts_per_page' =>3);
		$loop = new WP_Query($args);
		while ($loop->have_posts()) : $loop->the_post(); ?>
		<div class="cpn_ln">
			<div class="cpn_img">
			<a target="_blank" href="<?php $cuurl = get_field('url'); if($cuurl!="") echo $cuurl;?>">
				<?php the_post_thumbnail('full'); ?>
				</a>
			</div>
			<div class="cpn_img_des">
				<div class="img_des_img">
				<?php
										// get an image field
				$image = get_field('company_image');

				// each image contains a custom field called 'link'
				$link = get_field('link', $image['ID']);

				// render
				?>
				<a href="#">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</a>
				<!--<img src="<?php //echo get_template_directory_uri();?>-child/images/com.jpg">-->					
				</div>
				<div class="img_des_title">
					<h3><?php the_title(); ?></h3>
				</div>

			</div>
		</div>
		<?php endwhile; ?>
	</div>
</div>
<div id="content">
<!--Most Popular-->
<div class="most_popular">
	<div class="content_title">
		<h4>Most Popular Coupons</h4>
	</div>
	<?php //popular_cupon_post(3)?>




	<?php
		
			// show all coupons and setup pagination
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			query_posts( array( 'post_type' => APP_POST_TYPE, 'post_status' => $post_status, 'ignore_sticky_posts' => 1, 'paged' => $paged,'posts_per_page' => '3' ) );
		?>
		<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

			


	<div class="cpn_bdy clearfix">
		<div class="cpn_bdy_img">

			<div class="img_bx">
				<a href="<?php echo clpr_get_first_term_link( $post->ID, APP_TAX_STORE ); ?>"><img src="<?php echo clpr_get_store_image_url( $post->ID, 'post_id', 110 ); ?>" alt="" /></a>
			</div>
		</div>
		<div class="cpn_bdy_con">
			<h4> <a href="<?php the_permalink(); ?>">
				<?php clpr_coupon_title(); ?>
			</a></h4>
			<div class="post_con">				
				<?php clpr_coupon_content(); ?>

			</div>			
		</div>
		<div class="cpn_bdy_rimg">
				<div class="see_coup">					
					<?php  
			// Get the term from a custome texonomy which is using thi post
 			$terms = get_the_terms( $post->ID , 'coupon_category' ); 
 			if ( $terms != null ){
 				foreach( $terms as $term ) { 
 					$current_term =  $term->slug ; 
 					unset($term);
				} 
				if ($current_term =='offer') {
					?>
					<a target="_blank" href="<?php echo clpr_get_coupon_out_url( $post ); ?>">
						<img src="<?php echo get_template_directory_uri();?>-child/images/offere.png">
					</a>
					<?php
				}elseif ($current_term =='see-coupon') {
					 ?>
					<div id="pop_modal" class="pop_modal clearfix">
						<img src="<?php echo get_template_directory_uri();?>-child/images/seecouponn.png">

						<?php $coupon_code = wptexturize( get_post_meta( $post->ID, 'clpr_coupon_code', true ) );
												?>
					<input class="hdn_popup_code" name="hdn_popup_code" value="<?php echo $coupon_code;?>" type="hidden" >

					<input class="hdn_popup_url" name="hdn_popup_url" value="<?php echo clpr_get_coupon_out_url( $post ); ?>" type="hidden" >


					</div>
					
					<?php
				}
			} 
			?>
					
				</div>
		</div>
		
	</div>
	<?php endwhile; ?>	

<?php else: ?>
	<div class="blog">

		<h3><?php _e( 'Sorry, no coupons found', APP_TD ); ?></h3>

	</div> <!-- #blog -->

<?php endif; ?>

		
	
</div>

<!--Newest-->
<div class="most_newest">

	<div class="content_title">
		<h4>Newest Coupons</h4>		
	</div>
		<?php
		
			// show all coupons and setup pagination
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			query_posts( array( 'post_type' => APP_POST_TYPE, 'post_status' => $post_status, 'ignore_sticky_posts' => 1, 'paged' => $paged,'posts_per_page' => '3' ) );
		?>
		<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
	<div class="cpn_bdy clearfix">

	
		<div class="cpn_bdy_img">

			<div class="img_bx">
				<a href="<?php echo clpr_get_first_term_link( $post->ID, APP_TAX_STORE ); ?>"><img src="<?php echo clpr_get_store_image_url( $post->ID, 'post_id', 110 ); ?>" alt="" /></a>
			</div>
		</div>
		<div class="cpn_bdy_con">
			<h4> <a href="<?php the_permalink(); ?>">
				<?php clpr_coupon_title(); ?>
			</a></h4>
			<div class="post_con">				
				<?php clpr_coupon_content(); ?>

			</div>			
		</div>
		<div class="cpn_bdy_rimg">
				<div class="see_coup">					
					<?php  
			// Get the term from a custome texonomy which is using thi post
 			$terms = get_the_terms( $post->ID , 'coupon_category' ); 
 			if ( $terms != null ){
 				foreach( $terms as $term ) { 
 					$current_term =  $term->slug ; 
 					unset($term);
				} 
				if ($current_term =='offer') {
					?>
					<a target="_blank" href="<?php echo clpr_get_coupon_out_url( $post ); ?>">
						<img src="<?php echo get_template_directory_uri();?>-child/images/offere.png">
					</a>
					<?php
				}elseif ($current_term =='see-coupon') {
					 ?>
					<div id="pop_modal" class="pop_modal clearfix">
						<img src="<?php echo get_template_directory_uri();?>-child/images/seecouponn.png">

						<?php $coupon_code = wptexturize( get_post_meta( $post->ID, 'clpr_coupon_code', true ) );
												?>
					<input class="hdn_popup_code" name="hdn_popup_code" value="<?php echo $coupon_code;?>" type="hidden" >

					<input class="hdn_popup_url" name="hdn_popup_url" value="<?php echo clpr_get_coupon_out_url( $post ); ?>" type="hidden" >


					</div>
					
					<?php
				}
			} 
			?>
					
				</div>
		</div>
		
	</div>
	<?php endwhile; ?>

	<?php appthemes_after_endwhile(); ?>

<?php else: ?>
	<div class="blog">

		<h3><?php _e( 'Sorry, no coupons found', APP_TD ); ?></h3>

	</div> <!-- #blog -->

<?php endif; ?>
	
</div>



	<!--<div class="content-box">
		<div class="box-holder">
			<div class="head">
				<h2><?php //_e( 'New Coupons', APP_TD ); ?></h2>
				<div class="counter"><?php// printf( _n( 'There are currently %s active coupon', 'There are currently %s active coupons', $posts_count, APP_TD ), html( 'span', $posts_count ) ); ?></div>
			</div>
			<?php
				// show all coupons and setup pagination
				//$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				//query_posts( array( 'post_type' => APP_POST_TYPE, 'post_status' => $post_status, 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
			?>
			<?php //get_template_part( 'loop', 'coupon' ); ?>
		</div>
	</div> -->
</div>

<?php get_sidebar( 'home' ); ?>
