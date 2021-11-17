![Kirby Type Methods](.github/title.png)

**Type Methods** is a plugin for [Kirby 3](https://getkirby.com) helping to identify the type of an object, either page, user or file, in order to simplify logic in snippets that – for instance – handle content from both `$page` and `$user` objects.

## Examples

Think of site where you want to list members. Member information is either stored with the Kirby users (for admins) or on pages (for normal members). Given you have an array of all members, containing either user or page objects, type methods will you to identify the source:

```php
<?php foreach ($members as $member): ?>
  <?php if ($member->isUser()): ?>
    <?= $member->username() ?> (<?= $member->role() ?>)
  <?php else: ?>
    <?= $member->title() ?>
  <?php endif; ?>
<?php endforeach; ?>
```

Their is also a shortcut to check the given template or role respectively:

```php
<?php if ($member->isType('parents')): ?>
  <!-- do stuff specific to all pages with the `intendedTemplate` of `parents` -->
<?php elseif ($member->isType('admin')): ?>
  <!-- do stuff specific to all users with the `role` of `admin` -->
<?php endif; ?>
```

Using `isType()` is both shorter than checking `intendedTemplate` or `role` and also doesn't require you to check first which object you are dealing with (page or user).

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

# Methods

These methods work on page, user or file objects:

## isPage()

Checks if the given object is a page.

```php
$object->isPage();
```

Returns either `true` or `false`.

## isUser()

Checks if the given object is a user.

```php
$object->isUser();
```

Returns either `true` or `false`.

## isFile()

Checks if the given object is a file.

```php
$object->isFile();
```

Returns either `true` or `false`.

## isType('template')

Checks if the object has the given template.

```php
$page->isType('article');
```

Returns either `true` or `false`.

# License

This plugin is provided freely under the [MIT license](LICENSE.md) by [hana+nils · Büro für Gestaltung](https://hananils.de).
We create visual designs for digital and analog media.
