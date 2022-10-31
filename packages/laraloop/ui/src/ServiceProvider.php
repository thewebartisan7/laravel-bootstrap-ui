<?php

namespace Laraloop\UI;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Laraloop\UI\Commands\InstallCommand;
use Laraloop\UI\Commands\PublishCommand;

class ServiceProvider extends BaseServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/ui.php', 'ui');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishCommand::class,
                InstallCommand::class,
            ]);
        }
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ui');

        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $prefix = config('ui.prefix', '');

            foreach (config('ui.components', []) as $alias => $classOrView) {
                $blade->component($classOrView, $alias, $prefix);
            }
        });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/ui.php' => $this->app->configPath('ui.php'),
            ], 'ui-config');

            $this->publishes([
                __DIR__.'/../resources/views' => $this->app->resourcePath('views/vendor/ui'),
            ], 'ui-views');
        }
    }
}
