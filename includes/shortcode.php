<?php 

/**
 * Generates the Fundle Donation Button shortcode HTML.
 *
 * @param array $atts Shortcode attributes.
 * @return string Generated button HTML.
 */
function fundle_donation_button_shortcode( $atts ) {
	// Retrieve the current settings.
	$paypal_email            = get_option( 'fundle_paypal_email' );
	$cause                   = get_option( 'fundle_cause' );
	$currency_code           = get_option( 'fundle_currency_code' );
	$amount                  = get_option( 'fundle_amount' );
	$button_label            = get_option( 'fundle_button_label' );
	$button_background_color = get_option( 'fundle_button_background_color' );
	$button_text_color       = get_option( 'fundle_button_text_color' );
	$button_border_radius    = get_option( 'fundle_button_border_radius' );
	$button_size             = get_option( 'fundle_button_size' );

	// Generate the donation button HTML with customizations.
	$button_html  = '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">';
	$button_html .= '<input type="hidden" name="cmd" value="_donations">';
	$button_html .= '<input type="hidden" name="business" value="' . esc_attr( $paypal_email ) . '">';
	$button_html .= '<input type="hidden" name="item_name" value="' . esc_attr( $cause ) . '">';
	$button_html .= '<input type="hidden" name="currency_code" value="' . esc_attr( $currency_code ) . '">';
	$button_html .= '<input type="hidden" name="amount" value="' . esc_attr( $amount ) . '">';
	$button_html .= '<input type="submit" value="' . esc_attr( $button_label ) . '" style="background-color: ' . esc_attr( $button_background_color ) . '; color: ' . esc_attr( $button_text_color ) . '; border-radius: ' . esc_attr( $button_border_radius ) . 'px; font-size: ' . esc_attr( $button_size ) . ';">';
	$button_html .= '</form>';

	// Return the generated HTML.
	return $button_html;
}
add_shortcode( 'fundle_donation_button', 'fundle_donation_button_shortcode' );
