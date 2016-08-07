<?php

/**
 * Custom Card Gateway Class
 */

class Your_Custom_Gateway extends WC_Payment_Gateway {

  /**
   * Your_Custom_Gateway constructor.
   */
  public function __construct() {
    $this->id          = 'your_custom_gateway';
    $this->title       = 'Your Custom Gateway';
    $this->description = 'Gateway description';
    $this->has_fields  = true;
  }

  /**
   * Echo HTML to be displayed in the cart checkout
   */
  public function payment_fields() {

    if ( $this->description ) {
      echo '<p>' . wp_kses_post( $this->description ) . '</p>';
    }

  }

  /**
   * Process the payment
   *
   * @param $order_id
   */
  public function process_payment( $order_id ) {
    $order = wc_get_order( $order_id );
    $customer_id = $order->get_customer_id();

    // magic happens

  }

}