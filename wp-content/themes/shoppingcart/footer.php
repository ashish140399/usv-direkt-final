<?php
/**
 * The template for displaying the footer.
 *
 * @package Theme Freesia
 * @subpackage ShoppingCart
 * @since ShoppingCart 1.0
 */

$shoppingcart_settings = shoppingcart_get_theme_options(); ?>
</div><!-- end #content -->
<!-- Footer Start ============================================= -->
<footer id="colophon" class="site-footer" role="contentinfo">
<?php

$footer_column = $shoppingcart_settings['shoppingcart_footer_column_section'];
	if( is_active_sidebar( 'shoppingcart_footer_1' ) || is_active_sidebar( 'shoppingcart_footer_2' ) || is_active_sidebar( 'shoppingcart_footer_3' ) || is_active_sidebar( 'shoppingcart_footer_4' )) { ?>
	<div class="widget-wrap">
		<div class="wrap">
			<div class="widget-area">
			<?php
				if($footer_column == '1' || $footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'shoppingcart_footer_1' ) ) :
						dynamic_sidebar( 'shoppingcart_footer_1' );
					endif;
				echo '</div><!-- end .column'.absint($footer_column). '  -->';
				}
				if($footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'shoppingcart_footer_2' ) ) :
						dynamic_sidebar( 'shoppingcart_footer_2' );
					endif;
				echo '</div><!--end .column'.absint($footer_column).'  -->';
				}
				if($footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'shoppingcart_footer_3' ) ) :
						dynamic_sidebar( 'shoppingcart_footer_3' );
					endif;
				echo '</div><!--end .column'.absint($footer_column).'  -->';
				}
				if($footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'shoppingcart_footer_4' ) ) :
						dynamic_sidebar( 'shoppingcart_footer_4' );
					endif;
				echo '</div><!--end .column'.absint($footer_column).  '-->';
				}
				?>
			</div> <!-- end .widget-area -->
		</div><!-- end .wrap -->
	</div> <!-- end .widget-wrap -->
	<?php } ?>
	<div class="site-info" style="background-color: #242B37">
		<div class="wrap">
			<div class="footer_last">
				<div class="footer_b_left">
					Copyright &2018 <span>Patrick Butke & USV-Direkt.</span>All Rights Reserved
				</div> 
				<div class="footer_b_right">
					<a href=""  target="_blank">
						<i class="fab fa-facebook"></i>		
					</a>
					<a href="" target="_blank">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="" target="_blank">
						<i class="fab fa-instagram"></i>				
					</a>
					<a href=""  target="_blank">
						<i class="fab fa-linkedin"></i>		
					</a>
					<a href=""  target="_blank">
						<i class="fab fa-behance"></i>	
					</a>
				</div>
			</div>
		</div>

		




	<!--div class="wrap">
	<?php do_action('shoppingcart_footer_menu');
	if($shoppingcart_settings['shoppingcart_buttom_social_icons'] == 0):
		do_action('shoppingcart_social_links');
	endif;

	if ( is_active_sidebar( 'shoppingcart_footer_options' ) ) :
		dynamic_sidebar( 'shoppingcart_footer_options' );
	else:
		echo '<div class="copyright">'; ?>
		<a title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name', 'display' ); ?></a> | 
						<?php esc_html_e('Designed by:','shoppingcart'); ?> <a title="<?php echo esc_attr__( 'Theme Freesia', 'shoppingcart' ); ?>" target="_blank" href="<?php echo esc_url( 'https://themefreesia.com' ); ?>"><?php esc_html_e('Theme Freesia','shoppingcart');?></a> |
						<?php  echo '&copy; ' . date_i18n(__('Y','shoppingcart')) ; ?> <a title="<?php echo esc_attr__( 'WordPress', 'shoppingcart' );?>" target="_blank" href="<?php echo esc_url( 'https://wordpress.org' );?>"><?php esc_html_e('WordPress','shoppingcart'); ?></a>
					</div>
	<?php endif; ?>
			<div style="clear:both;"></div>
		</div--> <!-- end .wrap -->
	</div> <!-- end .site-info -->
	<?php
		$disable_scroll = $shoppingcart_settings['shoppingcart_scroll'];
		if($disable_scroll == 0):?>
			<button type="button" class="go-to-top" type="button">
				<span class="screen-reader-text"><?php esc_html_e('Go to top','shoppingcart'); ?></span>
				<span class="icon-bg"></span>
				<span class="back-to-top-text"><i class="fa fa-angle-up"></i></span>
				<i class="fa fa-angle-double-up back-to-top-icon"></i>
			</button>
	<?php endif; ?>
	<div class="page-overlay"></div>
</footer> <!-- end #colophon -->
</div><!-- end .site-content-contain -->
</div><!-- end #page -->
<?php wp_footer(); ?>
</body>
</html>
  <script>
	$(document).ready(function(){
	  $(".add_to_cart_button").html("<img src='http://localhost/direkt2/wp-content/uploads/2019/10/shopping-cart.png'>");
	   $(".woocommerce-product-gallery .flex-viewport").addClass("col-sm-9 order-sm-1");
	   $(".woocommerce-product-gallery .flex-control-nav").addClass("col-sm-3 order-sm-0");
	   $(".summary_box .woocommerce-product-rating").prepend('<div style="float:left;display:inline-block;font-weight:bold;width:90px;">Rating</div>');
	   $(".ywapo_group_container h3 span").removeClass("dashicons dashicons-arrow-down");
	   });
</script>
