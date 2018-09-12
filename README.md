# Material-UI extension for laravel-admin

[中文文档](README-CN.md)

Material-UI is a Material Design extension for [laravel-admin](https://github.com/z-song/laravel-admin), using Bootstrap Material Design.

## Screenshot

![wx20180911-143907 2x](https://user-images.githubusercontent.com/2421068/45342669-38c49600-b5d1-11e8-96a9-4dec50e38017.png)

## Requirements

* laravel-admin >= 1.6.1

## Installation

First, install material-ui:
```bash
composer require jxlwqq/material-ui
```

Then publish assets files：

```bash

php artisan vendor:publish --tag=laravel-admin-material-ui
```


## Configurations

Add `extensions` option in your `config/admin.php` configuration file:

```php
'extensions' => [
    'material-ui' => [
        // If the value is set to false, this extension will be disabled
        'enable' => true
    ]
]
```

## Use

Just **Refresh** your browser.


## Special thanks

* [DucThanhNguyen/MaterialAdminLTE](https://github.com/DucThanhNguyen/MaterialAdminLTE)
* [FezVrasta/bootstrap-material-design](https://github.com/FezVrasta/bootstrap-material-design)

## License

Licensed under [The MIT License (MIT)](LICENSE).

