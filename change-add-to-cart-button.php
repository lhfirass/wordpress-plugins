// Change WooCommerce 'Add To Cart' button to 'View Product'
add_filter( 'woocommerce_loop_add_to_cart_link', 'wpt_custom_view_product_button', 10, 2 );
function wpt_custom_view_product_button( $button, $product  ) {
// Ignore for variable products
if( $product -> is_type( 'variable' ) ) return $button;
// Button text here
$button_text = __( "View product", "woocommerce" );
return '<a class="button wpt-custom-view-product-button" href="' . $product->get_permalink() . '">' . $button_text . '</a>';
}