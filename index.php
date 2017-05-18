<?php
/**
 * Plugin Name: Community Events Privacy
 * Plugin URI:  https://wordpress.org/plugins/community-events-privacy
 * Description: Prevents WordPress from sending a user's IP address when attempting to determine which location to use for listing nearby WordPress community events.
 * Version:     0.1
 * Text Domain: community-events-privacy
 * Author:      WordPress Community Team
 * Author URI:  https://make.wordpress.org/community
 * License:     GPLv2 or later
 *
 * @package Community Events Privacy
 */

defined( 'WPINC' ) || die();

/**
 * Remove the IP address from the http request args if the target URL is the Events API endpoint.
 *
 * @since 0.1
 *
 * @param array  $args List of http request arguments.
 * @param string $url  The base URL of the http request.
 *
 * @return array Filtered list of arguments.
 */
function cep_filter_http_request_args( $args, $url ) {
	if ( false !== strpos( $url, 'api.wordpress.org/events' ) ) {
		if ( isset( $args['ip'] ) ) {
			unset( $args['ip'] );
		}
	}

	return $args;
}

add_filter( 'http_request_args', 'cep_filter_http_request_args', 10, 2 );
