<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Dashboard page callback.
 */
function fundle_dashboard_page() {
	echo '
	<section class="Dashboard-title" style="display: flex; align-items: center; justify-content: space-around;">
		<div>
			<h1>Fundle version 0.1.0!</h1>
		</div>
		<div>
			<a href="https://github.com/Frenziecodes">Report a bug or request a feature</a>       
		</div>
	</section>';
	echo '<hr/>';
	echo '
		<p>use shortcode [fundle_donation_button] to display your donation button.</p>
	';
}
