# App Landing theme

_App Landing_ is a theme for [Cecil](https://cecil.app), powered by [Tailwind CSS](https://tailwindcss.com).

![Demo screenshot](docs/screenshot.png)

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
  source: https://github.com/Cecilapp/the-butler
  documentation: https://github.com/Cecilapp/the-butler#readme
  demo: https://the-butler-demo.cecil.app
  screenshot: cecil-preview.png
```

### Screenshot

`screenshot` can be a single image, or distinct images for mobile and desktop:

```yaml
applanding:
  screenshot:
    mobile: preview-mobile.png
    desktop: preview-desktop.png
```

To display a dark mode variant, add an image suffixed with `.dark` alongside the original one (e.g.: `preview-desktop.dark.png`). The suffix can be changed with the [`layouts.images.dark_suffix`](https://cecil.app/documentation/configuration/#layouts-images) option.

### Build the CSS

Run the following command to build the CSS file:

```bash
composer install
composer css:build
```

## License

 _App Landing_ is a free software distributed under the terms of the MIT license.

© [Arnaud Ligny](https://arnaudligny.fr)
