# Prices page importer

A one-off seed for the **Prices** page (`page-templates/page-prices.php`). Run it once on each environment after the page is created; from then on, edit prices in WP Admin.

> **Cross-client workflow lives in the repo-root `CLAUDE.md`** under "Prices Page Seeding Workflow" — including the gotchas (PowerShell paste, live vs staging, `cd ~/public`, the WP-CLI/ACF quirk). Read that first if you've not seeded a Prices page before. This file covers the per-client operational details only.

## Files

- `prices-seed.json` — the launch snapshot of all prices, grouped by tab. Edit if you ever need to re-seed an environment.
- `import-prices.php` — the WP-CLI script that reads the JSON and writes it into the Prices page's ACF repeaters.

## When to run

| Situation | What to do |
|---|---|
| First time setting up a new environment (staging, prod, fresh clone) | Run the importer once |
| Routine price change after launch | **Don't run this.** Edit in WP Admin → Pages → Prices |
| Resetting a borked Prices page back to the launch snapshot | Run with `--force` (will overwrite client edits) |

## Prerequisites

1. The Prices page exists in WordPress (WP Admin → Pages → Add New → Page Attributes → Template = **Prices** → Publish). The importer finds the page by its template, so the slug doesn't matter.
2. WP-CLI is available on the host (Kinsta has it by default).
3. ACF PRO is active.

## Running it

SSH into the environment, `cd` to the WordPress root, then:

```bash
# Safe mode — refuses to run if the Prices page already has any rows
wp eval-file wp-content/themes/denton-pharmacy-theme/bin/import-prices.php

# Force mode — overwrites whatever is currently there
wp eval-file wp-content/themes/denton-pharmacy-theme/bin/import-prices.php -- --force
```

You'll get a summary like:

```
Seeded "Prices" (page ID 123):
  weight_loss  16
  travel       19
  private      52
  nhs          10
  disclaimer   1

Success: Prices seeded.
```

Refresh `/prices/` to see them.

## Editing prices later

**Don't edit `prices-seed.json` for routine changes** — the seed file is a launch snapshot, not the source of truth. Once seeded, the database is the source of truth and edits live in WP Admin → Pages → Prices, where the client can update them without a developer or a deploy.

The only reason to edit the JSON afterwards is if you genuinely want to re-seed an environment from scratch (e.g. setting up a new staging site, or rolling a prod page back to launch state).
