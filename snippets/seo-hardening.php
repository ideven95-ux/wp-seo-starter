<?php
/**
 * Basic WordPress hardening snippets for SEO-focused builds.
 * Add to a child theme's functions.php or a site-specific plugin.
 */

// Remove the WordPress version number from head / feeds (less info for scanners).
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );

// Disable XML-RPC (common brute-force vector).
// Re-enable if you use Jetpack or the WordPress mobile app.
// add_filter( 'xmlrpc_enabled', '__return_false' );

// Remove shortlink / oEmbed discovery bloat from <head> (keeps markup clean for crawlers).
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

// Set a sensible JPEG quality default (smaller images, faster pages).
add_filter( 'jpeg_quality', function () { return 82; } );
