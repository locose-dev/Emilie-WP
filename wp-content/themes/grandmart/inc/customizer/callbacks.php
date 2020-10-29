<?php
/**
 * Callbacks functions
 *
 * @package grandmart
 */

if ( ! function_exists( 'grandmart_theme_color_custom_enable' ) ) :
	/**
	 * Check if theme color custom enabled
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function grandmart_theme_color_custom_enable( $control ) {
		return 'custom' == $control->manager->get_setting( 'grandmart_theme_options[theme_color]' )->value();
	}
endif;

if ( ! function_exists( 'grandmart_has_woocommerce' ) ) :
	/**
	 * Check if woocommerce is enabled enabled
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function grandmart_has_woocommerce() {
		return class_exists( 'WooCommerce' ) ? true : false;
	}
endif;

if ( ! function_exists( 'grandmart_slider_content_product_enable' ) ) :
	/**
	 * Check if slider content type is product.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function grandmart_slider_content_product_enable( $control ) {
		return 'product' == $control->manager->get_setting( 'grandmart_theme_options[slider_content_type]' )->value();
	}
endif;

if ( ! function_exists( 'grandmart_slider_content_page_enable' ) ) :
	/**
	 * Check if slider content type is page.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function grandmart_slider_content_page_enable( $control ) {
		return 'page' == $control->manager->get_setting( 'grandmart_theme_options[slider_content_type]' )->value();
	}
endif;

if ( ! function_exists( 'grandmart_service_content_page_enable' ) ) :
	/**
	 * Check if service content type is page.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function grandmart_service_content_page_enable( $control ) {
		return 'page' == $control->manager->get_setting( 'grandmart_theme_options[service_content_type]' )->value();
	}
endif;

if ( ! function_exists( 'grandmart_service_content_product_enable' ) ) :
	/**
	 * Check if service content type is product.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function grandmart_service_content_product_enable( $control ) {
		return 'product' == $control->manager->get_setting( 'grandmart_theme_options[service_content_type]' )->value();
	}
endif;

if ( ! function_exists( 'grandmart_category_content_category_enable' ) ) :
	/**
	 * Check if category content type is category.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function grandmart_category_content_category_enable( $control ) {
		return 'category' == $control->manager->get_setting( 'grandmart_theme_options[category_content_type]' )->value();
	}
endif;

if ( ! function_exists( 'grandmart_category_content_product_category_enable' ) ) :
	/**
	 * Check if category content type is product category.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function grandmart_category_content_product_category_enable( $control ) {
		return grandmart_has_woocommerce() && 'product-category' == $control->manager->get_setting( 'grandmart_theme_options[category_content_type]' )->value();
	}
endif;

if ( ! function_exists( 'grandmart_featured_content_product_category_enable' ) ) :
	/**
	 * Check if featured content type is product category.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function grandmart_featured_content_product_category_enable( $control ) {
		return grandmart_has_woocommerce() && 'product-category' == $control->manager->get_setting( 'grandmart_theme_options[featured_content_type]' )->value();
	}
endif;

if ( ! function_exists( 'grandmart_recent_content_category_enable' ) ) :
	/**
	 * Check if recent content type is category.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function grandmart_recent_content_category_enable( $control ) {
		return 'category' == $control->manager->get_setting( 'grandmart_theme_options[recent_content_type]' )->value();
	}
endif;
