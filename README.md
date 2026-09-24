[![Type Methods for Kirby CMS](header.png)](https://kirby.hananils.de/plugins/type-methods)

Type Methods helps to identify the type of an object, either page, user or file, in order to simplify logic in snippets that – for instance – handle content from both `$page` and `$user` objects.

## Examples

Think of site where you want to list members. Member information is either stored with the Kirby users (for admins) or on pages (for regular members). Given you have an array of all members, containing either user or page objects, type methods will help you to identify the source:

```php
<?php foreach ($members as $member): ?>
  <?php if ($member->isUser()): ?>
    <?= $member->username() ?> (<?= $member->role() ?>)
  <?php else: ?>
    <?= $member->title() ?>
  <?php endif; ?>
<?php endforeach; ?>
```

There is also a shortcut to check the given template or role respectively:

```php
<?php if ($member->isType('parents')): ?>
  <!-- do stuff specific to all pages with the `intendedTemplate` of `parents` -->
<?php elseif ($member->isType('admin')): ?>
  <!-- do stuff specific to all users with the `role` of `admin` -->
<?php endif; ?>
```

Using `isType()` is both shorter than checking `intendedTemplate` or `role` and also doesn’t require you to check first which object you are dealing with (page or user).

## Installation

By default, plugins in Kirby reside in a special folder located at `/site/plugins`. Each plugin is installed in its proprietary subfolder. This installation can be handled in four different ways: you can either install them manually or manage them using Kirby CLI, Git submodules or Composer. You can install Type Methods either way and should choose the method suiting your project best.

Please note that all examples given here assume you are using the default plugin root. [If you changed your plugin root](https://getkirby.com/docs/reference/system/roots/plugins), e. g. with a custom folder setup, you’ll also have to adjust the paths given in this guide. For further information on how to manage plugins, please read the [official Kirby plugin introduction](https://getkirby.com/docs/guide/plugins/plugin-basics).

### Download

Download and copy this repository to `/site/plugins/type-methods`.

### Kirby CLI

```shell
kirby plugin:install hananils/kirby-type-methods
```

### Git submodule

```bash
git submodule add \
    https://github.com/hananils/kirby-type-methods.git \
    site/plugins/type-methods
```

### Composer

```shell
composer require hananils/kirby-type-methods
```

## Documentation

[![Find all documentation at kirby.hananils.de](footer.png)](https://kirby.hananils.de/plugins/type-methods)

Where possible, files contain inline annotations. For extended documentation, please visit our dedicated plugin site at [kirby.hananils.de/​plugins/​type-methods](https://kirby.hananils.de/plugins/type-methods).

### Reference

- [Page Methods](https://kirby.hananils.de/plugins/type-methods/page-methods)
- [Block Methods](https://kirby.hananils.de/plugins/type-methods/block-methods)
- [File Methods](https://kirby.hananils.de/plugins/type-methods/file-methods)
- [User Methods](https://kirby.hananils.de/plugins/type-methods/user-methods)

## License

This plugin is provided freely under the [MIT license](https://kirby.hananils.de/plugins/type-methods/license) by [hana+nils · Büro für Gestaltung](https://kirby.hananils.de). We create visual designs for digital and analog media.