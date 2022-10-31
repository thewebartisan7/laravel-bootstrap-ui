<?php

declare(strict_types=1);

namespace Laraloop\UI\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

final class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ui:publish {component}
                            {--view : Publish only the view of the component}
                            {--class : Publish only the class of the component}
                            {--force : Overwrite existing files}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish a component\'s view and/or class.';

    public function handle(Filesystem $filesystem): int
    {
        $components = config('ui.components');
        $alias = $this->argument('component');

        if (! $component = $components[$alias] ?? null) {
            $this->error("Cannot find the given [$alias] component.");

            return self::FAILURE;
        }

        $class = str_replace('Laraloop\\UI\\Components\\', '', $component);
        $view = str_replace(['_', '.-'], ['-', '/'], Str::snake(str_replace('\\', '.', $class))).'.blade.php';

        if ($this->option('view') || ! $this->option('class')) {
            $originalView = __DIR__.'/../../resources/views/components/'.$view;
            $publishedView = $this->laravel->resourcePath('views/vendor/ui/components/'.$view);
            $path = Str::beforeLast($publishedView, '/');

            if (! $this->option('force') && $filesystem->exists($publishedView)) {
                $this->error("The view at [$publishedView] already exists.");

                return self::FAILURE;
            }

            $filesystem->ensureDirectoryExists($path);

            $filesystem->copy($originalView, $publishedView);

            $this->info('Successfully published the component view!');
        }

        if ($this->option('class') || ! $this->option('view')) {
            $path = $this->laravel->basePath('app/View/Components');
            $destination = $path.'/'.str_replace('\\', '/', $class).'.php';

            if (! $this->option('force') && $filesystem->exists($destination)) {
                $this->error("The class at [$destination] already exists.");

                return self::FAILURE;
            }

            $filesystem->ensureDirectoryExists(Str::beforeLast($destination, '/'));

            $stub = $filesystem->get(__DIR__.'/../../stubs/Component.stub');
            $namespace = Str::beforeLast($class, '\\');
            $name = Str::afterLast($class, '\\');
            $alias = 'Base'.$name;

            $stub = str_replace(
                ['{{ namespace }}', '{{ name }}', '{{ parent }}', '{{ alias }}'],
                [$namespace, $name, $component, $alias],
                $stub,
            );

            $filesystem->put($destination, $stub);

            $this->info('Successfully published the component class!');

            // Update config entry of component to new class.
            if ($filesystem->missing($config = $this->laravel->configPath('ui.php'))) {
                $this->call('vendor:publish', ['--tag' => 'ui-config']);
            }

            $originalConfig = $filesystem->get($config);

            $modifiedConfig = str_replace($component, 'App\\View\\Components\\'.$class, $originalConfig);

            $filesystem->put($config, $modifiedConfig);
        }

        return self::SUCCESS;
    }
}
