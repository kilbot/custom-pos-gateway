<?php

/**
 * If your theme has a functions.php file, copy and paste the code below
 */

/**
 * Add gateway to WooCommerce
 *
 * @param $methods
 * @return array
 */
function add_your_custom_gateway( $methods ) {
  require_once('inc/custom-gateway.php');
  $methods[] = 'Your_Custom_Gateway';
  return $methods;
}

add_filter( 'woocommerce_payment_gateways', 'add_your_custom_gateway' );