<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package ketoki
 * @since ketoki 1.0
 */

get_header(); ?>
<div class="ec-minheader"> 
   <div class="ec-minheader-wrap"> <span class="full-pattren"></span> 
      <div class="container"> 
         <div class="row"> 
            <div class="col-md-12">
               <div class="ec-page-title"> 
               <?php 
                if(is_shop() || is_product_category() || is_product()){
                  echo "<h1>"."Our Products"."</h1>";
                }

               ?>                                                
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
   <div class="ec-main-section ec-main-space">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="ec-detail">
                  <div class="ec-blog ec-blog-large">
                     <ul class="row">
                        <li class="col-md-12">
                           <div class="ec-blog-grid-wrap">                             
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="ec-detail-editor">
                       <?php woocommerce_content(); ?> 
                  </div>
               </div>
            </div>
            <?php// get_sidebar();?>
         </div>
      </div>
   </div>
</div>


<?php get_footer(); ?>