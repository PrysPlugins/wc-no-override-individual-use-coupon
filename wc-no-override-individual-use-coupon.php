<?php
/**
 * Plugin Name: Don't override individual use coupons.
 * Plugin URI: https://github.com/PrysPlugins/wc-no-override-individual-use-coupon
 * Description: When a coupon marked for individual use is applied to the cart, don't allow other individual use coupons to replace it.
 * Version: 1.0.0
 * Author: Jeremy Pry
 * Author URI: http://jeremypry.com/
 * GitHub Plugin URI: PrysPlugins/wc-no-override-individual-use-coupon
 * License: GPL2
 */

// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
	die( "You can't do anything by accessing this file directly." );
}

add_filter( 'woocommerce_apply_individual_use_coupon', 'jpry_no_override_individual_use_coupons', 10, 3 );
/**
 * Don't allow other single-use coupons to override existing single-use coupons.
 *
 * @param array     $keep
 * @param WC_Coupon $new_coupon
 * @param string[]  $applied_coupons
 */
function jpry_no_override_individual_use_coupons( $keep, $new_coupon, $applied_coupons ) {
	foreach ( $applied_coupons as $applied_coupon ) {
		$coupon = new WC_Coupon( $applied_coupon );
		if ( $coupon->get_individual_use() ) {
			$keep[] = $applied_coupon;
		}
	}

	return $keep;
}
