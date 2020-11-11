# App Landing theme

> The App Landing theme for Cecil.

## Installation

```bash
composer require cecil/theme-applanding
npm install tailwindcss
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

## Build CSS styles

Create `tailwind.config.js` file:

```javascript
module.exports = {
  purge: {
    enabled: true,
    mode: 'all',
    content: [
      './layouts/**/*.html.twig',
      './themes/**/layouts/**/*.html.twig',
    ],
    options: {
      whitelist: [],
    }
  }
}
```

Run build:

```bash
npx tailwindcss build ./themes/applanding/static/styles.css -o ./static/css/styles.css
```
