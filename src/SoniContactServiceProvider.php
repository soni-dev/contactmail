<?php

namespace Soni\ContactEmail;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class SoniContactServiceProvider extends ServiceProvider
{
    public function boot(){
     $this->loadRoutesFrom(__DIR__.'/routes/web.php');
     $this->loadViewsFrom(__DIR__.'/views',"contactemail");
     $this->loadMigrationsFrom(__DIR__.'/database/migrations');
      $this->mergeConfigFrom(
        __DIR__.'/config/contact.php', 'contactemail'
    );
       $this->publishes([
        __DIR__.'/config/contact.php' => config_path('contact.php'),
    ]);
    }
    public function register(){
    
    }
}
