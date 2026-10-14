# WP SEO Starter

My opinionated starting point for every WordPress build: the essential plugin stack, drop-in code snippets, and server/config tweaks I use to ship sites that are fast, secure, and SEO-ready from day one.

## What's inside

- `docs/plugin-stack.md` — the plugins I install on every build (and why)
- `docs/wp-config-tweaks.md` — wp-config.php constants for performance & hardening
- `snippets/schema-local-business.php` — JSON-LD LocalBusiness schema, ready to customize
- `snippets/seo-hardening.php` — remove version meta, clean up `<head>`, sensible image defaults
- `server/htaccess-example` — browser caching + compression for Apache (adapt to your server)

## Usage

Snippets are written for a child theme's `functions.php` or a small custom plugin. Search for `REPLACE` and fill in your own values before deploying. Nothing here is a black box — read the comments.

Built by Tyra Redot — WordPress developer, SEO & AIO specialist. 📧 ideven95@gmail.com
