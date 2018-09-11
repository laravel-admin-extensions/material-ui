# Material-UI extension for laravel-admin


这是一个`laravel-admin`扩展，用来将`laravel-admin`风格切换成 [Material Design](https://material.io/)。


## 截图

![wx20180911-143907 2x](https://user-images.githubusercontent.com/2421068/45342669-38c49600-b5d1-11e8-96a9-4dec50e38017.png)

## 安装

首先，安装依赖：
```bash
composer require jxlwqq/material-ui
```

然后，发布资源目录：
```bash
php artisan vendor:publish --tag=laravel-admin-material-ui
```

## 配置

在`config/admin.php`文件的`extensions`，加上属于这个扩展的一些配置
```php
'extensions' => [
    'material-ui' => [
        // 如果要关掉这个扩展，设置为false
        'enable' => true
    ]
]
```

## 使用

刷新后台页面即可。

## 鸣谢

* [DucThanhNguyen/MaterialAdminLTE](https://github.com/DucThanhNguyen/MaterialAdminLTE)


License
------------
Licensed under [The MIT License (MIT)](LICENSE).

