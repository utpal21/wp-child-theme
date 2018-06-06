<?php 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . 'styles/blue.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . 'styles/custom-sample.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . 'styles/gray.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . 'styles/green.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . 'styles/ie.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . 'styles/ie7.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . 'styles/orange.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . 'styles/red.css' );

}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );
function child_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_template_directory_uri() . '-child/css/bootstrap.min.css' );
    wp_enqueue_style( 'child-style', get_template_directory_uri() . '-child/css/bootstrap-theme.min.css' );   

}
/*By U*/
add_action('init', 'fcoupon_init');
function fcoupon_init() {
	$labels = array(
		'name' => _x('CouponH', 'post type general name'),
		'singular_name' => _x('couponh', 'post type singular name'),
		'add_new' => _x('Add New', 'Header Couupon'),
		'add_new_item' => __('Add New Header Couupon'),
		'edit_item' => __('Edit Header Couupon'),
		'new_item' => __('New Header Couupon'),
		'view_item' => __('View Header Couupon'),
		'search_items' => __('Search Header Couupon'),
		'not_found' => __('No Header Couupon found'),
		'not_found_in_trash' => __('No Header Couupon found in Trash'), 
		'parent_item_colon' => '',
		'menu_name' => 'CouponH'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','thumbnail')
	); 
	register_post_type('couponh', $args);
}

if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
}
/**
	 * Displays Popular Coupon
	 *
	 * @param array $instance
	 * 
	 * @return void
	 */
	function popular_cupon_post($post_pp) {	

		$post_status = ( ! empty( $instance['hide_unreliable'] ) ) ? array( 'publish' ) : array( 'publish', 'unreliable' );

		$coupons_args = array(
			'post_type' => APP_POST_TYPE,
			'post_status' => $post_status,
			'posts_per_page' => $post_pp,
			'orderby' => 'comment_count',
			// 'order' => 'DESC',
			'no_found_rows' => true			
		);

		$coupons = new WP_Query( $coupons_args );
		$result = '';

		//$result .= '<div>';

		if ( $coupons->have_posts() ) {

			while ( $coupons->have_posts() ) {
				$coupons->the_post();
				$comments_text = sprintf( _n( '%1$s comment', '%1$s comments', get_comments_number(), APP_TD ), get_comments_number() );


				$result .= '<div class="cpn_bdy clearfix">';
				$result .= '<div class="cpn_bdy_img"><div class="img_bx">';			
				$result .='<a href="'.clpr_get_first_term_link( $post->ID, APP_TAX_STORE ).'"><img src="'.clpr_get_store_image_url( $post->ID, 'post_id', 110 ).'" alt="" /></a>';			
				$result .= '</div></div>';


				

				

				
				// <a href="' . get_permalink() . '">' . get_the_title() . '</a> - ' . $comments_text . '</div>' . PHP_EOL;


					$result .= '</div>' . PHP_EOL;;

			}
			appthemes_after_endwhile();

		} else {
			$result .= '<div class="no-results">' . __( 'No popular coupons yet.', APP_TD ) . '</div>';
		}

		//$result .= '</div>';

		wp_reset_postdata();

		echo $result;
	}



	function store_name() {		
 			$number = 10; 		

		$tax_args = array(
			'orderby' => 'count',
			'order' => 'DESC',
			'hide_empty' => 1,
			'show_count' => 1,
			'pad_counts' => 0,
			'app_pad_counts' => 1,
			'exclude' => clpr_hidden_stores(),
		);
		$stores = get_terms( APP_TAX_STORE, $tax_args );

		$result = '';
		$i = 0;

		$result .= '<div class="store-widget"><ul class="list">';

		if ( $stores && is_array( $stores ) ) {

			foreach ( $stores as $store ) {
				if ( $i >= $number ) {
					break;
				}

				$link = get_term_link( $store, APP_TAX_STORE );
				$coupons_text = sprintf( _n( '%1$d coupon', '%1$d coupons', $store->count, APP_TD ), $store->count );
				$result .= '<li><a class="tax-link" href="' . $link . '">' . $store->name . '</a> - ' . $coupons_text . '</li>' . PHP_EOL;
				$i++;
			}

		} else {
			$result .= '<li class="no-results">' . __( 'No stores found.', APP_TD ) . '</li>';
		}

		$result .= '</ul></div>';

		echo $result;
	}





function esserabat_child_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Instruction', 'clipper-child' ),
		'id'            => 'instruc',
		'description'   => __( 'Add widget here to show instruction in store page.', 'clipper-child' ),
		'before_widget' => '<div class="ins_text">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title" style="display:none">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'esserabat_child_widgets_init' );
