# App Landing theme

> _App Landing_ is a theme for [Cecil](https://cecil.app), powered by [Tailwind CSS](https://tailwindcss.com).

![Demo screenshot](docs/Cecil-theme-applanding-screenshot.jpg)

## Installation

```bash
composer require cecil/theme-applanding
```

> Or [download the latest archive](https://github.com/Cecilapp/theme-applanding/releases/latest/) and uncompress its content in `themes/applanding`.

## Usage

### Configure Cecil

Add `applanding` in the `theme` section of your `config.yml`:

```yaml
theme:
  - applanding
```

**Example:**

```yaml
theme:
  - applanding
applanding:
  buttons:
    - name: Netlify
      url: https://cecil.app/hosting/netlify/deploy
      image: https://www.netlify.com/img/deploy/button.svg
  source: https://github.com/Cecilapp/the-butler#readme
  screenshot: /cecil-preview.png
  demo: https://the-butler-demo.cecil.app
```

## Development

```bash
npx tailwindcss-cli build ./themes/applanding/static/styles.css -o ./static/css/styles.css
```
