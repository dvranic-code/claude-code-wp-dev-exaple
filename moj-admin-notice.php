<?php
/**
 * Plugin Name: Moj Admin Notice
 * Description: Shows a notice at the top of wp-admin.
 * Version: 1.0.0
 * Author: Claude Code
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'admin_notices', function () {
	echo '<div class="notice notice-info"><p>Hello from Claude Code</p></div>';
} );
