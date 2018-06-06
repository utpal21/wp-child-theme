         <!--/ Footer /--> 
         <footer id="ec-footer">
            <!--/ Footer Widget /--> 
            <div class="ec-footer-widget">
               <div class="container">
                  <div class="row">
                     <aside class="widget col-md-3 widget_info">
                        <div class="ec-main-title">
                           <h2>Contact INfo</h2>
                        </div>
                        <ul>
                           <li><i class="fa fa-bank"></i><?php global $ketoki; echo $ketoki['office-add']; ?></li>
                           <li><i class="fa fa-mobile"></i><?php echo $ketoki['mobile']; ?></li>
                           <?php
                              if(!empty($ketoki['t-phone'])):
                              echo '<li><i class="fa fa-phone"></i>'.$ketoki['t-phone']."</li>"; 
                              endif;
                            ?>
                           
                           <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $ketoki['email']; ?>"><?php echo $ketoki['email']; ?></a></li>
                        </ul>
                     </aside>
                     <?php dynamic_sidebar('footer-sidebar');?>
                     <!-- <aside class="widget col-md-3 widget_categories">
                        <div class="ec-main-title">
                           <h2>Recent Posts</h2>
                        </div>
                        <ul>
                           <li><a href="#">Lates Projects</a> (12)</li>
                           <li><a href="#">Blog</a> (12)</li>
                           <li><a href="#">Featured</a> (12)</li>
                           <li><a href="#">News</a> (12)</li>
                           <li><a href="#">Hot Products</a> (12)</li>
                        </ul>
                     </aside>
                     <aside class="widget col-md-3 widget_gallery">
                        <div class="ec-main-title">
                           <h2>Our Photos</h2>
                        </div>
                        <ul class="gallery">
                           <li><a href="extra-images/banner-thumb.png" data-rel="prettyPhoto[gallery1]" title=""><img src="extra-images/gallery-widget-1.jpg" alt=""></a></li>
                           <li><a href="extra-images/banner-thumb2.png" data-rel="prettyPhoto[gallery1]" title=""><img src="extra-images/gallery-widget-2.jpg" alt=""></a></li>
                           <li><a href="extra-images/blog-grid-3.jpg" data-rel="prettyPhoto[gallery1]" title=""><img src="extra-images/gallery-widget-3.jpg" alt=""></a></li>
                           <li><a href="extra-images/banner-thumb.png" data-rel="prettyPhoto[gallery1]" title=""><img src="extra-images/gallery-widget-4.jpg" alt=""></a></li>
                           <li><a href="extra-images/banner-thumb.png" data-rel="prettyPhoto[gallery1]" title=""><img src="extra-images/gallery-widget-5.jpg" alt=""></a></li>
                           <li><a href="extra-images/blog-grid-3.jpg" data-rel="prettyPhoto[gallery1]" title=""><img src="extra-images/gallery-widget-6.jpg" alt=""></a></li>
                        </ul>
                     </aside>
                     <aside class="widget col-md-3 widget_form">
                        <div class="ec-main-title">
                           <h2>Quick Inquiry</h2>
                        </div>
                        <form>
                           <ul>
                              <li><input type="text" placeholder="Name" required></li>
                              <li><input type="text" placeholder="Email" required></li>
                              <li><textarea placeholder="Message" required></textarea></li>
                              <li><input type="submit" class="ec-bgcolor" value="get a quick quote"></li>
                           </ul>
                        </form>
                     </aside> -->
                  </div>
               </div>
            </div>
            <!--/ Footer Widget /--> 
            <div class="ec-bottom-section">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="ec-copyright">
                        <p><?php
                        global $ketoki;
                       echo $ketoki['copytext'];
                         ?></p>                           
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="ec-social-network">
                           <ul>
                            <?php if($ketoki['social-icon']['1']): ?>
                              <li><a target="_blank" href="<?php echo $ketoki['social-icon']['1']; ?>"><i class="fa fa-facebook"></i> <span>Facebook</span></a></li>
                           <?php endif; ?>
                             <?php if($ketoki['social-icon']['2']): ?>
                              <li><a target="_blank" data-original-title="Twitter" href="<?php echo $ketoki['social-icon']['2']; ?>"><i class="fa fa-twitter"></i> <span>Twitter</span></a></li>
                              <?php endif; ?>
                              <?php if($ketoki['social-icon']['3']): ?>
                              <li><a target="_blank" data-original-title="Google-Plus" href="<?php echo $ketoki['social-icon']['3']; ?>"><i class="fa fa-google-plus"></i> <span>Google-Plus</span></a></li>
                              <?php endif; ?>
                              <?php if($ketoki['social-icon']['4']): ?>
                              <li><a target="_blank" data-original-title="Dribbble" href="<?php echo $ketoki['social-icon']['4']; ?>"><i class="fa fa-dribbble"></i> <span>Dribbble</span></a></li>
                              <?php endif; ?>
                              <?php if($ketoki['social-icon']['5']): ?>
                              <li><a target="_blank" data-original-title="Pinterest" href="<?php echo $ketoki['social-icon']['5']; ?>"><i class="fa fa-pinterest-p"></i> <span>Pinterest</span></a></li>
                              <?php endif; ?>  
                           </ul>
                        </div>
                        <a class="backtop-btn" href="#"><i class="fa fa-angle-double-up as-color"></i></a> 
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!--/ Footer /--> 
         <div class="clearfix"></div>
      </div>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content ec-userlogin">
               <div class="modal-header ec-bgcolor">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button> 
                  <h5>GET A QUOTE</h5>
               </div>
               <div class="modal-body">
               <?php echo do_shortcode('[contact-form-7 id="98" title="home_quote"]');?>
                 <!--  <form>
                     <ul class="ec-login-form">
                        <li> <label>Name</label> <input type="text" placeholder="Name" required> </li>
                        <li class="half-grid no-padding"> <label>Email</label> <input type="password" placeholder="Email" required> </li>
                        <li class="half-grid"> <label>Mobile Number</label> <input type="text" placeholder="Mobile Number" required> </li>
                        <li class="half-grid no-padding"> <label>Service Type</label> <input type="text" placeholder="Service Type" required> </li>
                        <li class="half-grid">
                           <label>Number of Workers</label> 
                           <div class="select-parent">
                              <select>
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                              </select>
                           </div>
                        </li>
                        <li class="half-grid no-padding">
                           <label>Date</label> 
                           <div id="datetimepicker2" class="input-append"> <input data-format="MM/dd/yyyy HH:mm:ss PP" type="text"> <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span> </div>
                        </li>
                        <li class="half-grid">
                           <label>Time</label> 
                           <div id="datetimepicker3" class="input-append"> <input data-format="hh:mm:ss" type="text"> <span class="input-group-addon add-on"><span class="fa fa-clock-o"></span></span> </div>
                        </li>
                        <li> <label>Address</label> <input type="text" placeholder="Address" required> </li>
                        <li> <label>Message</label> <textarea></textarea> </li>
                        <li> <input type="submit" value="GET A QUOTE" class="ec-bgcolor"> </li>
                     </ul>
                  </form> -->
               </div>
            </div>
         </div>
      </div>
     
                 <?php wp_footer();?> 
   </body>
</html>