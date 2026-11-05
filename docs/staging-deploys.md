# Deploying a branch or pull request to staging (Denton / Bowland)

Merging to `main` deploys straight to the **live** sites. To check a change
first, run the **Deploy a branch or PR to staging** workflow
(`.github/workflows/deploy-to-staging.yml`). It copies a theme from any branch
or pull request onto the Kinsta **staging** environment, then runs the same
post-deploy steps as live (price update scripts in `bin/update-*.php`, cache
purge).

It cannot deploy to live: before copying anything it connects to the target and
stops unless the server's hostname contains `staging` and the WordPress address
is a `*.kinsta.cloud` staging URL.

## One-time setup

### 1. Make sure each site has a staging environment

MyKinsta → **Sites** → the site → environment switcher → **Create new
environment** → standard environment → clone **Live**.

### 2. Refresh staging from live before testing

Staging is only useful if its database matches live. Most visible text on these
sites comes from values saved in WP Admin, which override the theme's defaults,
so an old staging database gives a misleading test. In MyKinsta, copy **Live →
Staging** (files and database), either with **Push environment** from Live or by
restoring the latest Live backup to Staging.

**Never push Staging → Live.** That overwrites the live database.

### 3. Add the staging SSH details as repository secrets

MyKinsta → the site → switch to the **Staging** environment → **Info** →
**SFTP/SSH**. Check the host does not say `live`. Then in GitHub → **Settings**
→ **Secrets and variables** → **Actions** → **New repository secret**:

| Secret | Value (from the Staging environment) |
|---|---|
| `DENTON_STAGING_SSH_HOST` | Host |
| `DENTON_STAGING_SSH_PORT` | Port |
| `DENTON_STAGING_SSH_USER` | Username |
| `DENTON_STAGING_SSH_PASSWORD` | Password |
| `BOWLAND_STAGING_SSH_HOST` | Host |
| `BOWLAND_STAGING_SSH_PORT` | Port |
| `BOWLAND_STAGING_SSH_USER` | Username |
| `BOWLAND_STAGING_SSH_PASSWORD` | Password |

Adding secrets needs Admin on the repository.

## Running it

GitHub → **Actions** → **Deploy a branch or PR to staging (Denton / Bowland)** →
**Run workflow** (leave "Use workflow from" on `main`):

- **site:** `both`, `denton` or `bowland`
- **ref:** for a pull request, `refs/pull/NUMBER/merge`. That is the PR combined
  with the current `main`, so it is what live will look like after merging. A
  branch name also works, but it can miss changes made on `main` since the
  branch was cut.

The run summary shows what was deployed and the staging site's address.

## Gotchas

- **Saved WP Admin values still win on staging.** If old wording still shows
  after a deploy, check whether that field has a saved value in WP Admin before
  assuming the code is wrong.
- **Deleted files are not removed.** The copy goes over the top of the existing
  theme. Refresh staging from live to clear out old files.
- **Staging is not indexed** by search engines, so the structured data can be
  checked with https://validator.schema.org/ using the staging URL, but Search
  Console will not see it.
- If a run fails at **Refuse unless the target is a staging environment**, the
  secrets point at the wrong environment. Re-copy them from the Staging
  environment in MyKinsta.
