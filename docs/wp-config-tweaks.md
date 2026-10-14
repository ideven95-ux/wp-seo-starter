# wp-config.php tweaks

Add these **above** the `/* That's all, stop editing! Happy publishing. */` line.

```php
// Limit post revisions (keeps the database lean)
define( 'WP_POST_REVISIONS', 5 );

// Longer autosave interval (seconds)
define( 'AUTOSAVE_INTERVAL', 300 );

// Disable the built-in file editor (hardening)
define( 'DISALLOW_FILE_EDIT', true );

// Raise the PHP memory limit for WordPress
define( 'WP_MEMORY_LIMIT', '256M' );

// Force SSL in wp-admin
define( 'FORCE_SSL_ADMIN', true );
```

> Never edit wp-config.php over a flaky connection, and always download a backup copy first. One typo here whitescreens the site.
