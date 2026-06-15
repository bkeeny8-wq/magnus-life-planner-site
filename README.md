# Magnus Life Planner — Site

Landing page for Magnus, deployable to **GitHub Pages** and **WordPress.com Business**.

## Repository structure

```
index.html                          # GitHub Pages (static)
style.css                           # GitHub Pages (static)
wp-content/themes/magnus-life-planner/
  style.css                         # WordPress theme styles
  front-page.php                    # Landing page template
  index.php                         # Fallback template
  functions.php                     # Theme setup and assets
.deployignore                       # Files skipped on WordPress deploy
```

## GitHub Pages

1. Repo → **Settings** → **Pages**
2. Source: **Deploy from a branch** → `main` → `/ (root)`
3. Live URL: `https://bkeeny8-wq.github.io/magnus-life-planner-site/`

## WordPress.com Business

1. [wordpress.com/sites](https://wordpress.com/sites) → your site → **Deployments**
2. Connect `bkeeny8-wq/magnus-life-planner-site`
3. Mode: **Simple** · Branch: `main` · Deployment: **Manual**
4. **Trigger manual deployment** and wait for **Deployed**
5. **Appearance** → **Themes** → activate **Magnus Life Planner**
6. **Settings** → **Reading** → homepage can stay as default (theme handles the front page)

Root `index.html` and `style.css` are excluded from WordPress deploy via `.deployignore`.

## Linked pages

- Privacy Policy: `/privacy-policy/`
- Terms of Service: `/terms-of-service/`
- Support: bkeeny8@gmail.com
