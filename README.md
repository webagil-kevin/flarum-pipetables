# flarum-pipetables

![License](https://img.shields.io/github/license/kevid/flarum-pipetables.svg) [![Latest Stable Version](https://img.shields.io/github/release/kevid/flarum-pipetables.svg)](https://packagist.org/github/release/kevid/flarum-pipetables) [![Latest Stable Version](https://img.shields.io/packagist/v/kevid/flarum-pipetables.svg)](https://packagist.org/packages/kevid/flarum-pipetables) ![Issues](https://img.shields.io/github/issues/kevid/flarum-pipetables.svg)

A [Flarum](http://flarum.org) extension. Active markdown tables.

### Features
* respect markdown syntax
* unlimited lines and columns
* use the custom colors of your theme
* responsive design

### Example
![Flarum markdown tables](https://framapic.org/LEYSpBr1lbbv/2iLLOGOwRegm)

### Installation

Use [Bazaar](https://discuss.flarum.org/d/5151-flagrow-bazaar-the-extension-marketplace) or install manually with composer:

```sh
composer require kevid/flarum-pipetables
```

### Updating

```sh
composer update kevid/flarum-pipetables
php flarum cache:clear
```

### Configuration
Install then go to the admin panel and enable extension. That's all !

### Style
In admin, add this custom CSS:

#### Solid table border
```
.Post-body table {
    box-shadow: 0px 0px 0px 1px @primary-color;
    }
```

#### Without table border
```
.Post-body table {
    width: 100%;
    margin: auto;
    box-shadow: none;
    }
```

### Markdown Tables Generator
https://www.tablesgenerator.com/markdown_tables