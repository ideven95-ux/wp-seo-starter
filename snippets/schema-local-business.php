<?php
/**
 * JSON-LD LocalBusiness schema.
 * Drop into your child theme's functions.php or a custom plugin.
 * Replace the placeholder values with the business's real details.
 */
add_action( 'wp_head', function () {
    // Only output on the front page to avoid duplicate schema sitewide.
    if ( ! is_front_page() ) {
        return;
    }

    $schema = [
        '@context'  => 'https://schema.org',
        '@type'     => 'LocalBusiness',
        'name'      => 'REPLACE: Business Name',
        'url'       => home_url( '/' ),
        'telephone' => 'REPLACE: +1-555-0100',
        'address'   => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'REPLACE: Street',
            'addressLocality' => 'REPLACE: City',
            'addressRegion'   => 'REPLACE: State',
            'postalCode'      => 'REPLACE: ZIP',
            'addressCountry'  => 'REPLACE: Country',
        ],
    ];

    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}, 5 );
