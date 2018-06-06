<?php
/**
 * Generic Footer template.
 *
 * @package Clipper\Templates
 * @author  AppThemes
 * @since   Clipper 1.0
 */
?>


<div id="footer">
	<!--<div class="panel">

		<div class="panel-holder">

		<?php if ( ! dynamic_sidebar( 'sidebar_footer' ) ) : ?>

		
		<div id="widgetized-area">

			<?php if ( ! dynamic_sidebar( 'widgetized-area' ) ) : ?>

				<div class="pre-widget">

					<p><strong><?php _e( 'Widgetized Area', APP_TD ); ?></strong></p>
					<p><?php _e( 'The footer is active and ready for you to add some widgets via the Clipper admin panel.', APP_TD ); ?></p>

				</div>

			<?php endif; ?>

		</div> 

		<?php endif; ?>

		</div>

	</div>--> <!-- panel -->

	<div class="bar">
		<div class="bar-holder">			
			<p><?php _e( 'Mail: kontakt@rejserabat.com', APP_TD ); ?> </p>

		</div>

		<div class="bar-holder">
			<?php //wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => '', 'depth' => 1, 'fallback_cb' => false ) ); ?>
			<p><?php _e( 'COPYRIGHT @ 2015 | Rejserabat.com - Rejse billigere', APP_TD ); ?> </p>

		</div>

	</div>
</div> <!-- #footer -->

<script type="text/javascript">
	
	jQuery(document).ready(function(){
		jQuery('.pop_modal').click(function(){
			jQuery('#myModal').modal();
		})
	});
</script>
