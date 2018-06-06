<?php
/**
 * Template wrapper.
 *
 * @package Clipper\Templates
 * @author  AppThemes
 * @since   Clipper 1.3.1
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<title><?php wp_title( '' ); ?></title>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo appthemes_get_feed_url(); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/ie.css" media="screen"/><![endif]-->
       <!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/ie7.css" media="screen"/><![endif]-->

	<?php wp_head(); ?>

</head>

<body id="top" <?php body_class(); ?>>

	<?php appthemes_before(); ?>

	<div id="wrapper">

		<div class="w1">

			<?php appthemes_before_header(); ?>
			<?php get_header( app_template_base() ); ?>
			<?php appthemes_after_header(); ?>

			<div id="main">

				<?php load_template( app_template_path() ); ?>

			</div> <!-- #main -->

		</div> <!-- #w1 -->

		<?php appthemes_before_footer(); ?>
		<?php get_footer( app_template_base() ); ?>
		<?php appthemes_after_footer(); ?>

	</div> <!-- #wrapper -->

	<?php wp_footer(); ?>

	<?php appthemes_after(); ?>
<!--Confirm Modal-->
							<div class="modal fade section-popup showMessage" id="showMessage" tabindex="-1" role="dialog" aria-labelledby="showMessage" aria-hidden="true">
								<div class="modal-dialog" style="width: 30%">
									<div class="modal-content" >
										<div class="modal-header">
											<button style="color: red" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 style="text-align: center" class="modal-title">Your Coupon Code</h4>
										</div>
										<p id="json-error"></p>
										<div class="modal-body">
											<h4 id="msgDilog" style="color:black">						
											</h4>
											<div class="row">
												<div class="col-md-12"> <input type="text" name="ccode" class="form-control ccode" id="ccode" /> </div>
												<!-- <div class="col-md-4"><button type="button" class="btn btn-primary btn-sm" id="copy-button" data-clipboard-text="">Copy</button></div> -->
											</div>
											<div class="row" style="text-align:center;margin-top:10px;">
												<div class="col-md-12"> 
													<a target="_blank" id="pop_url_go" href="">Visit Site</a>
												</div>
											</div>



										</div>

										<div class="modal-footer">
											<!-- <div class="row">
												<div class="col-md-8"></div>
												<div class="col-md-2"></div>
												<div class="col-md-2"><button type="button" class="btn btn-close btn-sm" data-dismiss="modal">OK</button></div>
											</div> -->

										</div>
									</div>
								</div>
							</div>
							<!--End Confirm Modal-->



<script src="<?php echo get_template_directory_uri();?>-child/css/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	//alert();
			jQuery(document).ready(function(){

				jQuery(function(){
						jQuery('.pop_modal').click(function(){
							var coupcode = jQuery(this).find('.hdn_popup_code').val();
							var coupUrl = jQuery(this).find('.hdn_popup_url').val();
							jQuery('#pop_url_go').attr("href",coupUrl);
							//alert(coupcode);
							jQuery('#msgDilog').empty();
							jQuery('#ccode').val(coupcode);

							jQuery('#copy-button').attr('data-clipboard-text',coupcode);
						 // var theGoodStuff = jQuery(this).find('#showMessage');
						jQuery('#showMessage').modal();
					});

			});

		
	});
	</script>

</body>

</html>
