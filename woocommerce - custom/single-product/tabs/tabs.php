<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<section class="woowrapper">
		<div class="container">

			<!--div class="sprod-title">
				<div class="description_tab col-md-6">
					<h3 class="title-description"><span class="redline">Product Description</span><span class="greyline"></span></h3>
				</div>
				<div class="reviews_tab col-md-6">
					<h3 class="title-reviews"><span class="redline">Reviews</span><span class="greyline"></span></h3>
				</div>
			</div-->

<?php foreach ( $tabs as $key => $tab ) : ?>
				<div class="woocomm-tabs col-md-6 <?php echo esc_attr( $key ); ?>" id="tab-<?php echo esc_attr( $key ); ?>">
					<?php call_user_func( $tab['callback'], $key, $tab ); ?>
				</div>

<?php endforeach; ?>
		</div>
	</section>

<?php endif; ?>
	<script>
		jQuery(document).ready(function(){
			jQuery( "#tab-description h2" ).wrapInner('<span class="redline"></span>');
			jQuery( "#tab-description h2" ).append('<span class="greyline"></span>');
			jQuery( "#tab-reviews h2" ).text('Reviews');
			jQuery( "#tab-reviews h2" ).wrapInner('<span class="redline"></span>');
			jQuery( "#tab-reviews h2" ).append('<span class="greyline"></span>');
			jQuery( '#respond p.comment-form-author input' ).attr("placeholder", "Name*");
			jQuery( '#respond p.comment-form-email input' ).attr("placeholder", "Email*");
			jQuery( '#respond p.comment-form-comment textarea' ).attr("placeholder", "Your review");
		});
	</script>