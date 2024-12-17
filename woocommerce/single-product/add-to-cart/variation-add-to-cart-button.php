<?php
/**
 * Single variation cart button
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.4.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $product;
?>
<?php if(is_user_logged_in()){ ?>
<div class="woocommerce-variation-add-to-cart variations_button">
  <div class="input-group max-button no-margin">
    <span class="input-group-label">Qty:</span>
	<?php
		/**
		 * @since 3.0.0.
		 */
		do_action( 'woocommerce_before_add_to_cart_quantity' );
		woocommerce_quantity_input( array(
			'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
			'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
			'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : $product->get_min_purchase_quantity(),
		) );
		/**
		 * @since 3.0.0.
		 */
		do_action( 'woocommerce_after_add_to_cart_quantity' );
    $button_text = ( has_term('gear', 'product_cat') ) ? 'Buy Now' : esc_html( $product->single_add_to_cart_text() );
	?>
    <div class="input-group-button">
      <button type="submit" class="single_add_to_cart_button button expanded alt"><?php echo $button_text; ?></button>
      <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
      <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
      <input type="hidden" name="variation_id" class="variation_id" value="0" />
    </div>
  </div>
</div>
<?php }else{ ?>
  
    <a href="https://pulsevolleyball.com/account/" name="log-in-button" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button expanded alt">Log In</a>  
  
<?php } ?>
