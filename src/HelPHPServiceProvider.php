<?php

namespace Connf\HelPHP;

use Illuminate\Support\ServiceProvider;

class HelPHPServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // 
    }

    public function register()
    {
        foreach (glob(app_path() . '../vendor/connf/helphp/src/helpers/*.php') as $file) {
            require_once($file);
        }
    }
}
