<?php

namespace Laraloop\Website;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Illuminate\Support\Facades\Blade;

class ServiceProvider extends LaravelServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function boot()
  {
    // Views
    $this->loadViewsFrom(__DIR__ . '/../resources/views', 'website');

    // Register components
    Blade::component('website::components.demo', 'doc.demo');
    Blade::component('website::components.code', 'doc.code');

    // Routes
    \Illuminate\Support\Facades\Route::group([
      'middleware' => 'web'
    ], function () {
      $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    });

    if ($this->app->runningInConsole()) {
      $this->publishes([
        __DIR__ . '/../resources/js' => resource_path('js'),
      ], 'laraloop-js');
    }
  }
}
