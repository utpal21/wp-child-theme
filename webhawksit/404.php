<?php
get_header();
?>
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
	<div class="ec-main-section ec-bottom-padng">
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-12"> 
					<div class="ec-404page"> <span class="ec-color">404</span> 
						<h2>page not found</h2> 
						<p>Look Like something wrong! The page you were looking for is not here <br> Go <a class="ec-color" href="<?php echo home_url(); ?>">Home</a> or try search:</p>
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="widget ec-custom-search">
							<form method="" action="<?php echo home_url(); ?>">
							<input name="s" id="s" type="search"  placeholder="Search here..."> <label><input type="submit" value=""></label> 
							</form>
						</div>	
						</div>
						<div class="col-md-4"></div>

						
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
<?php
get_footer();
?>