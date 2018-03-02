# flarum-ext-pipetables
Active markdown tables for Flarum.

* Github: https://github.com/DogSports/flarum-ext-pipetables
* Issues: https://github.com/DogSports/flarum-ext-pipetables/issues
* Packagist: https://packagist.org/packages/dogsports/flarum-ext-pipetables

### Features
* respect markdown syntax
* unlimited lines and columns
* use the custom colors of your theme
* responsive design for phone

### Example
![Flarum markdown tables](https://framapic.org/LEYSpBr1lbbv/2iLLOGOwRegm)

### Installation
Use [Bazaar](https://github.com/flagrow/bazaar) or install manually:
```
composer require dogsports/flarum-ext-pipetables
```

### Updating
```
composer require dogsports/flarum-ext-pipetables
php flarum cache:clear
```

### Configuration
Install then go to the admin panel and enable the extension. That's all !

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
