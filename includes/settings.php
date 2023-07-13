<?php 

// Settings page callback
function fundle_settings_page() {
    if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
        // Save the settings if the form is submitted
        update_option( 'fundle_paypal_email', $_POST['paypal_email'] );
        update_option( 'fundle_cause', $_POST['cause'] );
        update_option( 'fundle_currency_code', $_POST['currency_code'] );
        update_option( 'fundle_amount', $_POST['amount'] );
        update_option( 'fundle_button_label', $_POST['button_label'] );
        update_option( 'fundle_button_background_color', $_POST['button_background_color'] );
        update_option( 'fundle_button_text_color', $_POST['button_text_color'] );
        update_option( 'fundle_button_border_radius', $_POST['button_border_radius'] );
        update_option( 'fundle_button_size', $_POST['button_size'] );
        echo '<div class="notice notice-success"><p>Settings saved.</p></div>';
    }

   // Retrieve the current settings
  $paypal_email            = get_option( 'fundle_paypal_email' );
  $cause                   = get_option( 'fundle_cause' );
  $currency_code           = get_option( 'fundle_currency_code' );
  $amount                  = get_option( 'fundle_amount' );
  $button_label            = get_option( 'fundle_button_label' );
  $button_background_color = get_option( 'fundle_button_background_color' );
  $button_text_color       = get_option( 'fundle_button_text_color' );
  $button_border_radius    = get_option( 'fundle_button_border_radius' );
  $button_size             = get_option( 'fundle_button_size' );

    // Display the settings page HTML
    ?>
    <div class="wrap">
      <h1>Fundle Settings</h1>
      <form method="POST" action="">
        <table class="form-table">
          <tr>
            <th scope="row"><label for="paypal_email">PayPal Email</label></th>
            <td><input type="email" name="paypal_email" id="paypal_email" value="<?php echo esc_attr( $paypal_email ); ?>"></td>
          </tr>
          <tr>
            <th scope="row"><label for="cause">Reason for donation</label></th>
            <td><input type="text" name="cause" id="cause" value="<?php echo esc_attr( $cause ); ?>"></td>
          </tr>
          <tr>
            <th scope="row"><label for="currency_code">Currency Code</label></th>
            <td><input type="text" name="currency_code" id="currency_code" value="<?php echo esc_attr( $currency_code ); ?>"></td>
          </tr>
          <tr>
            <th scope="row"><label for="amount">Donation Amount</label></th>
            <td><input type="number" name="amount" id="amount" value="<?php echo esc_attr( $amount ); ?>"></td>
          </tr>
          <tr>
            <th scope="row"><label for="button_label">Button Label</label></th>
            <td><input type="text" name="button_label" id="button_label" value="<?php echo esc_attr( $button_label ); ?>"></td>
          </tr>
          <tr>
          <th scope="row"><label for="button_background_color">Button Background Color</label></th>
          <td><input type="text" name="button_background_color" id="button_background_color" value="<?php echo esc_attr( $button_background_color ); ?>"></td>
        </tr>
        <tr>
          <th scope="row"><label for="button_text_color">Button Text Color</label></th>
          <td><input type="text" name="button_text_color" id="button_text_color" value="<?php echo esc_attr( $button_text_color ); ?>"></td>
        </tr>
        <tr>
          <th scope="row"><label for="button_border_radius">Button Border Radius</label></th>
          <td><input type="number" name="button_border_radius" id="button_border_radius" value="<?php echo esc_attr( $button_border_radius ); ?>"></td>
        </tr>
        <tr>
          <th scope="row"><label for="button_size">Button Size</label></th>
          <td>
            <select name="button_size" id="button_size">
              <option value="small" <?php selected( $button_size, 'small' ); ?>>Small</option>
              <option value="medium" <?php selected( $button_size, 'medium' ); ?>>Medium</option>
              <option value="large" <?php selected( $button_size, 'large' ); ?>>Large</option>
            </select>
          </td>
        </tr>
        </table>
        <p class="submit">
          <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">
        </p>
      </form>
    </div>
    <?php
}
