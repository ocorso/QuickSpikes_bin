<?php
/*
Plugin Name: wpsc-simple-shipping
Plugin URI: http://getshopped.org
Description: Enables free input for fixed rate shipping options, like "pickup - $0, regular - $5, overnght - $10"
Version: 1.0
Author: Instinct ent.
Author URI: http://instinct.co.nz
License: GPL2
*/

/*  Copyright 2010  Instinct ent.

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


class wpsc_simple_shipping {

	var $internal_name, $name;


	function wpsc_simple_shipping() {
		$this->internal_name = "simple_shipping";
		$this->name="Fixed rate";
		$this->is_external=false;
		return true;
	}


	function getName() {
		return $this->name;
	}
	
	
	function getInternalName() {
		return $this->internal_name;
	}


	function getForm() {

		$output.="<tr><th>".__('Option', 'wpsc')."</th><th>".__('Shipping Price', 'wpsc')."</th></tr>";
		$options = get_option('wpsc_simple_shipping');

		if ($options != '') {

			foreach ($options as $option => $price) {

				$output.="<tr class='rate_row'>
							<td>
								<input type='text' name='options[]' value='$option' style='width:250px;' />
							</td>
							<td>
								".wpsc_get_currency_symbol()."
								<input type='text' value='{$price}' name='prices[]'	>
								&nbsp;&nbsp;<a href='#' class='delete_button' >".__('Delete', 'wpsc')."</a>
							</td>
						</tr>";
			}
		}
		$output.="<input type='hidden' name='checkpage' value='simple'>";
		$output.= wp_nonce_field('aaaaaa','aaaaaa', false, false);
		$output.="<tr class='addoption'><td colspan='2'><a href='#' style='cursor:pointer;' id='addoption' >Add Option</a></td></tr>";
		$output.= '<script type="text/javascript">
			jQuery("document").ready(function(){
				jQuery(".addoption #addoption").click(function(){
					jQuery(this).before("<tr class=\'rate_row\'><td><input type=\'text\' name=\'options[]\' style=\'width:250px;\' /></td><td>'.wpsc_get_currency_symbol().' <input type=\'text\' name=\'prices[]\' >&nbsp;&nbsp;&nbsp;<a href=\'#\' onclick=\'this.parentNode.parentNode.parentNode.removeChild( this.parentNode.parentNode );\' class=\'delete_button\' >'.__('Delete', 'wpsc').'</a></td></tr>");
					return false;
				});
			});
		</script>';
		return $output;
	}


	function submit_form() {
		$nonce=$_REQUEST['aaaaaa'];
		//if (! wp_verify_nonce($nonce, 'aaaaaa') ) return false;
		
		//if it's not simple shipping - do nothing
		if($_POST['checkpage'] != 'simple' || !isset($_POST['options'])) return false;
		
		if (!isset($_POST['options'])) $_POST['options'] = '';

		$options = (array)$_POST['options'];
		$prices = (array)$_POST['prices'];
		if ( !empty( $prices ) ) {
			foreach ($prices as $key => $price) {
				if ( is_numeric($price) ) {
					$simple_shipping_options[$options[$key]] = $price;
				}
			}
		}
		update_option('wpsc_simple_shipping', $simple_shipping_options);
		return true;
	}


	function getQuote() {

		global $wpdb, $wpsc_cart;
		if (isset($_SESSION['nzshpcrt_cart'])) {
			$shopping_cart = $_SESSION['nzshpcrt_cart'];
		}
		if (is_object($wpsc_cart)) {
			$price = $wpsc_cart->calculate_subtotal(true);
		}

		$layers = get_option('wpsc_simple_shipping');

		if ($layers != '') {
			return $layers;
		}
	}


	function get_item_shipping(&$cart_item) {

		global $wpdb, $wpsc_cart;

		$unit_price = $cart_item->unit_price;
		$quantity = $cart_item->quantity;
		$weight = $cart_item->weight;
		$product_id = $cart_item->product_id;

		$uses_billing_address = false;
		foreach ($cart_item->category_id_list as $category_id) {
			$uses_billing_address = (bool)wpsc_get_categorymeta($category_id, 'uses_billing_address');
			if ($uses_billing_address === true) {
				break; /// just one true value is sufficient
			}
		}

		if (is_numeric($product_id) && (get_option('do_not_use_shipping') != 1)) {
			if ($uses_billing_address == true) {
				$country_code = $wpsc_cart->selected_country;
			} else {
				$country_code = $wpsc_cart->delivery_country;
			}

			if ($cart_item->uses_shipping == true) {
				//if the item has shipping
				$additional_shipping = '';
				if (isset($cart_item->meta[0]['shipping'])) {
					$shipping_values = $cart_item->meta[0]['shipping'];
				}
				if (isset($shipping_values['local']) && $country_code == get_option('base_country')) {
					$additional_shipping = $shipping_values['local'];
				} else {
					if (isset($shipping_values['international'])) {
						$additional_shipping = $shipping_values['international'];
					}
				}
				$shipping = $quantity * $additional_shipping;
			} else {
				//if the item does not have shipping
				$shipping = 0;
			}
		} else {
			//if the item is invalid or all items do not have shipping
			$shipping = 0;
		}
		return $shipping;
	}

}

function wpsc_simple_shipping_setup() {
	global $wpsc_shipping_modules;
	$simple_shipping = new wpsc_simple_shipping();
	$wpsc_shipping_modules[$simple_shipping->getInternalName()] = $simple_shipping;
}

add_action('plugins_loaded', 'wpsc_simple_shipping_setup');
?>