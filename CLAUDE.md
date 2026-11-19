# CLAUDE.md

Moleant www (www.moleant.com, repo `MoleantFrontEnd`): the public marketing site of Moleant AB. It sells Moleant
Discover (the product itself lives in the sibling repo `../DiscoverFrontEnd-1`) and also hosts the support site at
`/support/`, which used to be its own site at support.moleant.com. The look follows Discover: black top bar with the
logo, black left menu, Poppins, `#f5f5f4` page, and the start page's brand colours: green `#11db76`, pink `#cc51b7`,
gold `#d4ac50`, purple `#9305b8`, teal `#109cbf`. When the design needs to change, check Discover first.

## Stack and environment

- Plain PHP, no framework, no Composer, **no build step, no bundler, no database, no tests, no linter.** Vanilla JS in
  the new code (`js/site-menu.js`); the old checkout pages still use jQuery and Vue 2.
- Fonts (Poppins) and the icon font (`material-design/`, Material Design Iconic Font) are served locally. Never edit the
  vendored icon font or its CSS.
- Verify with `php -l <file>` (PHP is at `/opt/homebrew/bin/php`). `php -S` can't bind a port inside the Claude sandbox,
  so render a page from the command line instead, e.g.
  `php -r '$_SERVER["REQUEST_URI"]="/support/"; $_GET=["a"=>"welcome"]; chdir("support"); include "index.php";' > out.html`.
  Pages other than `support/` also call the production API from `inc/security.php` (see Secrets), so offline they print
  warnings, which is expected. Layout, the drawer menu and the collapsed menu need a real browser: headless Chrome works
  on a static copy of the rendered HTML (rewrite the root-relative URLs to relative ones), but only outside the Claude
  sandbox. Say so rather than claiming a layout was tested.
- Hosted on Azure App Service; `.vscode/settings.json` holds the deploy target (it names `moleantaccount`, which looks
  copied from AccountFrontEnd, so check it before deploying). `README.md` is also copied from AccountFrontEnd.

## Layout

| Path | What it is |
| --- | --- |
| `index.php` | Start page: hero, feature sections, "Our other projects", help center (drawn from the support tree) |
| `aboutus.php` | About us: hero, story, team cards. Edge to edge sections (`$pageclass = "site-main-wide"`) styled with `.about-*` |
| `pricing.php`, `privacy.php`, `termsofuse.php`, `cookies.php` | Public content pages, older `.moleantdiv` cards in `<main>` |
| `order.php`, `checkout*.php`, `kstat/`, `eztest.php`, `contact.php`, `index_old.php`, `test.*` | Old order and checkout flow and experiments. Not linked from the menu. Don't delete without asking |
| `get-token/index.php` | Token for the checkout pages' API calls |
| `inc/header.php`, `inc/footer.php` | Page chrome: `<head>`, top bar, left menu, `<main>` ... footer |
| `inc/site.php` | `H()` (escape), `Site_Asset_Url()`, `Site_Nav_Current()`. No credentials, safe on public pages |
| `inc/functions.php`, `inc/security.php`, `inc/JWT.php` ... | Old token and API code. Loads `config.php` |
| `css/default.css` | The older page styles (`.moleantdiv` cards, `.row`/`.column2-4`, buttons, `.bg-img*` heroes) |
| `css/site.css` | The new chrome (top bar, menu, footer), the start page sections (`.site-*`) and the About page (`.about-*`) |
| `css/support.css` | Article text, cards and breadcrumb of the support pages (`.support-*`); loaded only there |
| `js/site-menu.js` | Opens the menu as a drawer on small screens and collapses it to icons on wide ones |
| `support/index.php` | Front controller of the support section, chosen by `?a=<slug>` |
| `support/inc/articles.php` | **The article tree.** Decides what the Support menu shows and in what order |
| `support/inc/functions.php` | Slug check, tree index, menu and breadcrumb renderers, `Support_Url()` |
| `support/content/<slug>.php` | The HTML body of one article (no `<html>`, no `<h1>`: the page adds the title) |
| `image/projects/` | Cropped images of "Our other projects". The originals in `image/` have white margins |

## Anatomy of a page

```php
<?php
$sroot = realpath(dirname(__FILE__)) . "/";
require $sroot . 'config.php';
require $sroot . 'inc/security.php';
define ("INMOLEANT","TRUE");

$pagetitle = "Pricing - Moleant AB";   # optional, defaults to "Moleant AB"
$pagedesc = "...";                     # optional meta description
$lightpage = TRUE;                     # TRUE on a public page: skips jQuery, Vue and the token helpers
include("inc/header.php");
?>
<div class="moleantdiv"> ... </div>
<?php include("inc/footer.php"); ?>
```

- `INMOLEANT` must be defined before the header is included. Every file in `inc/` and `support/inc/` starts with the
  same guard.
- The header opens `.site-layout`, the menu and `<main>`; the footer closes them and draws the footer. **An extra
  `</div>` in a page closes `<main>` early and breaks the layout**, so keep page markup balanced.
- `$pageclass = "site-main-wide"` lets the sections of a page run edge to edge (the start page). Without it `<main>` has
  16px of padding and a card or `.row` placed straight in it is limited to 1100px.
- Pages that need jQuery, Vue or `HttpClient` (the order and checkout pages) leave `$lightpage` unset and get the old
  scripts.
- `css/site.css` starts with `* { margin: 0; padding: 0 }` on purpose: the older pages were spaced against the reset
  that the removed `hs-menu.min.css` used to give. Don't take it out without checking every page.

## The menu

The menu is a copy of Discover's, renamed from `support-*` to `site-*`, on a black ground like the top bar (text
`#c3cadb`, hover `rgba(255,255,255,.08)`, current item green). Items live in `inc/header.php`: icon (`zmdi-…`),
label in `.site-menu-label` (hidden visually when the menu is collapsed to icons, but kept for screen readers) and
`Site_Nav_Current()` for `aria-current`. A new top-level item needs an icon that exists in
`material-design/css/material-design-iconic-font.min.css`. Privacy, terms and cookies are in the footer, not the menu.

The footer (`inc/footer.php`, `.site-footer-*`) is this site's own and shares nothing with the footers of api.moleant.com
or Discover: a black ground, the "Collect. Visualize. Control." statement in the brand colours, four link columns whose
headings carry a colour dot (`--accent` set inline on each `<nav>`), and the logo as a faint watermark. It sits under the
whole layout, so on a short page it is below the first screen.

On support pages `support/index.php` sets `$supportnav` and the header draws the article tree under "Support".

## Support (`/support/`)

Public, no sign-in, no credentials: `support/index.php` deliberately does not load `config.php` or `inc/security.php`.
Keep it that way. Don't add features that need credentials or an API without asking.

Adding an article:

1. Add a node to `support/inc/articles.php`: `slug` (unique in the whole tree, `[a-z0-9-]`, max 80 characters), `title`
   and a one-sentence `summary` (used in overviews and as the meta description). Put it under a node with `children` to
   nest it. A node with `children` is a folder and gets an automatic overview page.
2. Create `support/content/<slug>.php` with the body as plain HTML. Folders have no content file.
3. Link to other articles with `/support/?a=<slug>`. Callouts use `<div class="support-note"><p>…</p></div>`.
4. Add the page to `sitemap.xml`.

Top-level nodes may have an `icon` (a `zmdi-…` class); the start page's help center uses it.

URLs use the query string so the site doesn't depend on web server rewrite rules. `$_GET["a"]` is only ever a lookup
key: `Support_Clean_Slug()` checks its shape, then it must exist in the tree. Never build a file path from request data.
Escape everything echoed into HTML with `H()`.

The old address `support.moleant.com/?a=<slug>` corresponds to `www.moleant.com/support/?a=<slug>`. A redirect on the old
host is not part of this repo, and the sibling repos (DiscoverFrontEnd-1, AccountFrontEnd, Projecto) still link to it.

## Conventions

- **Assets:** reference the site's own CSS and JS through `Site_Asset_Url()`, which adds the file's mtime so browsers pick
  up each deploy. The header used to load `default.css` and the scripts from absolute `https://www.moleant.com/...` URLs;
  they are local now.
- **CSS:** new rules go in `css/site.css` (`.site-` prefix) or `css/support.css` (`.support-` prefix). Avoid new inline
  styles; the start page's older sections still carry theirs.
- **Accessibility is deliberate** (Discover and the support site maintain it, so does this one). Keep the skip link,
  `aria-label` on `<nav>`s, `aria-current="page"` on the current menu link and breadcrumb item, `alt` text (`alt=""` for
  decoration) and visible focus outlines. The Support tree folders are `<details>`/`<summary>`, so they work without
  JavaScript.
- **Responsive:** below 992px the menu is an off-canvas drawer (only when JavaScript runs; otherwise it stays in the page
  above the content). Check new content at phone width.
- **Language:** the site and its comments are in English. Comments are full sentences that explain *why*. PHP uses `#` for
  block comments. New PHP uses tabs, older pages use two spaces; match the file you are in.
- Third-party tags stay in `inc/header.php`: Google Analytics (`G-72KN0JXHJ6`) and Cookiebot. Don't add trackers without
  asking.

## Secrets

`config.php` is committed and holds live credentials (database password, Azure storage key, JWT seed). Don't copy them
into new files, output, logs or commit messages, and don't add new secrets to code. `$allowlocalrun` must be `0` on
anything reachable from the internet. Also note that `inc/security.php` calls `api.moleant.com` (`SecBuildTicket`) on
every page that requires it, so even the public content pages depend on the API being up; `support/` does not.

## Git

Working branch `1.4`; `main` has diverged from it (the Stripe and start-page commits live on `main`). `//EZS` in commit
messages is one author's signature; don't add it.
