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

        $vendor_path = 'vendor/laravel-admin-ext/material-ui/';

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path($vendor_path)],
                'laravel-admin-material-ui'
            );
        }

        Admin::booting(function () use($vendor_path) {
            $css = [
                $vendor_path.'MaterialAdminLTE/dist/css/bootstrap-material-design.min.css',
                $vendor_path.'MaterialAdminLTE/dist/css/ripples.min.css',
                $vendor_path.'MaterialAdminLTE/dist/css/MaterialAdminLTE.min.css',
                $vendor_path.'MaterialAdminLTE/dist/css/skins/all-md-skins.min.css',
            ];

            $js = [
                $vendor_path.'MaterialAdminLTE/dist/js/material.min.js',
                $vendor_path.'MaterialAdminLTE/dist/js/ripples.min.js'
            ];

            Admin::css($css);
            Admin::js($js);
            Admin::script('$.material.init()');
        });


    }
}
