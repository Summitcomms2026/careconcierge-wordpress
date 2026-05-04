# CareConcierge launch checklist

Operational notes for taking the CareConcierge site live. This file is the source
of truth for launch tasks that sit outside the theme code itself — mainly DNS,
search-console verification, and analytics provisioning.

Last updated: 5 May 2026.

---

## Google Search Console

- Add **`careconcierge.health`** to Google Search Console as a **Domain property**
  (not a URL-prefix property). A Domain property covers `https://`, `http://`,
  `www`, and every subdomain in one record.
- Verification is performed via a **DNS TXT record** at the apex of the domain.
  Search Console will issue a verification token of the form
  `google-site-verification=…` to add as a TXT record.
- Once verified, submit the canonical sitemap (when available) and confirm that
  `https://careconcierge.health/surgeons/` appears in indexed pages.

### DNS — what must NOT change

When adding the Search Console TXT record:

- **Do not touch the existing Google Workspace MX records** — these route the
  team's email and must remain live throughout launch.
- **Do not remove or modify any existing TXT records** that look like
  `v=spf1 include:_spf.google.com ~all` or DKIM records (`google._domainkey`)
   — these are part of the email-deliverability stack. Add the Search Console
   verification record alongside them.
- **Do not change the WP Engine DNS records yet.** WP Engine A / CNAME records
  should be added only at the moment we cut the site over to production.
- **Existing Google Workspace email must remain live** before, during, and after
  the cutover. Any DNS edit should be reviewed against the current MX / SPF /
  DKIM / DMARC stack first.

### Verification meta tag (alternative)

The DNS method is the recommended path for a Domain property. If a *URL-prefix*
verification meta tag is also issued (typically `<meta name="google-site-verification" …>`),
it can be added to the theme via `wp_head` rather than to a plugin. Do not add a
verification tag until one has been explicitly supplied — empty placeholders
should not be committed.

---

## Analytics provider

The theme ships with an analytics provider stub at `inc/analytics.php`. It does
**not** load any third-party script by default. To enable a provider, add the
relevant constants to `wp-config.php` (or wherever site-specific secrets are
stored — never to source-controlled theme files):

### Plausible

```php
define( 'CARECONCIERGE_ANALYTICS_PROVIDER', 'plausible' );
define( 'CARECONCIERGE_ANALYTICS_DOMAIN',   'careconcierge.health' );
```

### GA4

```php
define( 'CARECONCIERGE_ANALYTICS_PROVIDER', 'ga4' );
define( 'CARECONCIERGE_ANALYTICS_GA4_ID',   'G-XXXXXXXXXX' );
```

Once a provider is configured, the corresponding script tag is emitted into
`<head>` automatically. Re-deploy or hard-reload to confirm.

### Events to wire (post-provider)

The events below are intentionally *not* wired yet — they wait for the chosen
provider's tagging conventions:

- Hero "Book Your Meeting" CTA — `#hero .cc-hero-cta`
- Investment "Book a founder briefing" CTA — `#investment .cc-invest__cta`
- Sample report click — `#report a[href$="sample-report.pdf"]`
- Deck request submit — fires when the `cc_deck_request` AJAX call returns
  `success: true` (see `assets/js/main.js` step 6)
- Deck download click — `#deck-request [data-cc-deck-link]` in the thank-you state
- Calendly interaction — Calendly inline widget event API
- Email click — `a[href^="mailto:"]`
- Audience selector clicks — `.cc-audience-link`
- Accordion opens — `.cc-faq__summary` click → `data-cc-open="true"` on the parent

---

## Cutover sequence (high-level)

1. Confirm the canonical hostname in `inc/seo.php` (`CARECONCIERGE_CANONICAL_HOST`)
   matches the live domain.
2. Add the Search Console TXT record to DNS without touching MX / SPF / DKIM.
3. Verify the property in Search Console.
4. Configure the analytics provider via the constants above.
5. Cut the WP Engine DNS records over to production.
6. Re-fetch the live page and confirm the JSON-LD payload, OG / Twitter tags,
   and canonical resolve correctly.
7. Submit the sitemap (when available) to Search Console.

## What this checklist deliberately does NOT do

- It does not modify DNS for you.
- It does not enqueue any analytics script without a configured provider.
- It does not install or configure any SEO plugin.
- It does not touch WordPress core, `wp-config.php`, plugins, uploads, cache,
  LocalWP configuration, the Summit website, or any Dropbox source file.
