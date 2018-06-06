<?php
/**
 * Template Name: Contact Page
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
                  <h1><?php the_title(); ?></h1>                               
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
                        <div class="ec-service ec-service-two">
                           <ul class="row">
                           <?php 
                              if(isset($ketoki['con-slide']) && !empty($ketoki['con-slide'])):
                              foreach ($ketoki['con-slide'] as $exp) {
                                 ?>
                               <li class="col-md-4">
                                 <div class="ec-service-wrap">
                                     <i class="ec-color fa <?php echo $exp['url']; ?>"></i>
                                    <h6><?php echo $exp['title']; ?></h6>
                                    <p><?php echo $exp['description']; ?></p>
                                    <div class="ec-nextarrow ec-bgcolor fa fa-angle-right" ></div> 
                                 </div>
                              </li>
                               <?php
                              }
                              endif;
                              ?>                            
                                                        
                           </ul>
                        </div>
                     </div>


                     



         </div>
       </div>
   </div>
   <div class="ec-main-section ec-main-cninfo">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
                <div class="ec-form ec-contact-form"> 
                <div class="ec-main-title"> 
                <h2>GET IN TOUCH WITH US</h2> 
                </div> 

                <!-- <form action="http://eyecix.com/html/renov/process-form.php" class="myform" method="post"> 
                   <p> <input type="text" required="" name="name" placeholder="Your Name"> </p> 
                   <p> <input type="text" required="" name="email" placeholder="Email"> </p> 
                   <p> <input type="text" required="" name="website" placeholder="Website"> </p> 
                   <p class="ec-comment"> 
                   <textarea name="Comment" placeholder="Comment">                   
                   </textarea> </p>

                  <p class="ec-submit"> <input type="submit" class="ec-bgcolor" value="Submit"> </p>
                  <span class="output_message"></span> 
                </form>  -->
                <?php echo do_shortcode('[contact-form-7 id="91" title="contact_form"]');?>

                </div> 
            </div>

         </div>
      </div>
   </div>

   <div class="ec-main-section">
      <div class="container-full">
        <div class="ec-map"> 
            <?php 
               global $ketoki;
               echo $ketoki['con-map'];
            ?>
         </div> 
      </div>
   </div>


</div>
<?php get_footer(); ?>

