# Kirby Type Methods

Kirby 3 plugin providing methods to check the type of a Kirby object.

## Installation

### Download

Download and copy this repository to `/site/plugins/type-methods`.

### Git submodule

```
git submodule add https://github.com/hananils/kirby-type-methods.git site/plugins/type-methods
```

### Composer

```
composer require hananils/kirby-type-methods
```

## Methods

These methods work on page, user or file objects:

### isPage()

Checks if the given object is a page.

```php
$object->isPage();
```

Returns either `true` or `false`.

### isUser()

Checks if the given object is a user.

```php
$object->isUser();
```

Returns either `true` or `false`.

### isFile()

Checks if the given object is a file.

```php
$object->isFile();
```

Returns either `true` or `false`.

### isType('template')

Checks if the object has the given template.

```php
$page->isType('article');
```

Returns either `true` or `false`.

## License

MIT

## Credits

[hana+nils · Büro für Gestaltung](https://hananils.de)
