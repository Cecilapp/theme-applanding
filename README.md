# App Landing theme

> _App Landing_ is a theme for [Cecil](https://cecil.app), powered by [Tailwind CSS](https://tailwindcss.com).

## Installation

```bash
composer require cecil/theme-applanding
```

> Or [download the latest archive](https://github.com/Cecilapp/theme-applanding/releases/latest/) and uncompress its content in `themes/applanding`.

```bash
npm install tailwindcss@1.9.6
```

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

### Build CSS file

Create `tailwind.config.js`:

```javascript
module.exports = {
  purge: {
    enabled: true,
    mode: 'all',
    content: [
      './layouts/**/*.html.twig',
      './themes/**/layouts/**/*.html.twig',
    ]
  }
}
```

Run build:

```bash
npx tailwindcss build ./themes/applanding/static/styles.css -o ./static/css/styles.css
```
