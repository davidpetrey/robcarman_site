<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<a href="<?php echo esc_url( wc_get_checkout_url() ) ;?>" class="checkout-button button alt wc-forward">
	<?php echo __( 'Proceed to Checkout', 'woocommerce' ); ?>
</a>
<a target="_blank" href="https://ssl.comodo.com" style="display:none" id="comodob">
	<img src="https://ssl.comodo.com/images/comodo_secure_seal_113x59_transp.png" alt="SSL Certificate" width="113" height="59" style="border: 0px;">
</a>

<!--script language="JavaScript" type="text/javascript">
TrustLogo("https://www.robcarman.com/wp-content/uploads/comodo_secure_seal_113x59_transp.png", "CL1", "none");
</script -->
<!--a  href="https://www.positivessl.com/" id="comodoTL">Positive SSL</a -->