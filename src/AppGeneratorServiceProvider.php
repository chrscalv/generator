<?php

namespace Chrscalv\AppGenerator;

use Illuminate\Support\ServiceProvider;

class AppGenerator extends ServiceProvider 
{
    public function boot()
    {
        $this->loadRoutesFrom('__DIR__', 'routes/api');
        $this->loadMigrationsFrom('__DIR__', '../database/migrations');
    }
    
    public function register()
    {
        //
    }
}