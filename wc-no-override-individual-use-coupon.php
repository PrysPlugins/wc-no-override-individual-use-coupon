<?php
/**
 * Plugin Name: Don't override individual use coupons.
 * Plugin URI: https://github.com/PrysPlugins/wc-no-override-individual-use-coupon
 * Description: When a coupon marked for individual use is applied to the cart, don't allow other individual use coupons to replace it.
 * Version: 1.0.0
 * Author: Jeremy Pry
 * Author URI: http://jeremypry.com/
 * GitHub Plugin URI: PrysPlugins/wc-no-override-individual-use-coupon
 * WC requires at least: 3.0.0
 * WC tested up to: 3.4.0
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
 * @param string[]  $keep            The array of coupon codes to keep.
 * @param WC_Coupon $new_coupon      The new coupon being applied.
 * @param string[]  $applied_coupons Array of currently applied coupon codes.
 *
 * @return array The filtered array of coupons to keep.
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
