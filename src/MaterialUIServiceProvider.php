<?php

namespace Jxlwqq\MaterialUI;

use Encore\Admin\Admin;
use Illuminate\Support\ServiceProvider;

class MaterialUIServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(MaterialUI $extension)
    {
        if (!MaterialUI::boot()) {
            return;
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/material-ui')],
                'laravel-admin-material-ui'
            );
        }


        Admin::css('/vendor/laravel-admin-ext/material-ui/MaterialAdminLTE/dist/css/bootstrap-material-design.min.css');
        Admin::css('/vendor/laravel-admin-ext/material-ui/MaterialAdminLTE/dist/css/ripples.min.css');
        Admin::css('/vendor/laravel-admin-ext/material-ui/MaterialAdminLTE/dist/css/MaterialAdminLTE.min.css');
        Admin::css('/vendor/laravel-admin-ext/material-ui/MaterialAdminLTE/dist/css/skins/all-md-skins.min.css');
        Admin::css('/vendor/laravel-admin-ext/material-ui/MaterialAdminLTE/dist/css/laravel-admin-custom.css');
        Admin::js('/vendor/laravel-admin-ext/material-ui/MaterialAdminLTE/dist/js/material.min.js');
        Admin::js('/vendor/laravel-admin-ext/material-ui/MaterialAdminLTE/dist/js/ripples.min.js');
        Admin::script('$.material.init()');

    }
}
