<?php

namespace Laraloop\UI\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ui:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Laraloop UI package';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->updateNodePackages();
        $this->ensureDirectoriesExists();
        $this->copyDirectories();

        copy(__DIR__.'/../../stubs/webpack.mix.js', base_path('webpack.mix.js'));

        $this->info('Laraloop UI installed successfully.');
        $this->comment('Please execute the "npm install && npm run dev" command to build your assets.');

        return self::SUCCESS;
    }

    /**
     * Update the "package.json" file.
     *
     * @return void
     */
    protected function updateNodePackages()
    {
        if (! file_exists(base_path('package.json'))) {
            return;
        }

        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        $packages['devDependencies'] = ($packages['devDependencies'] ?? []) + [
                'bootstrap' => '^5.1.3',
                'bootstrap-icons' => '^1.7.2',
                '@hotwired/stimulus' => '^3.0.0',
                '@hotwired/stimulus-webpack-helpers' => '^1.0.1',
                '@hotwired/turbo' => '^7.1.0',
                '@popperjs/core' => '^2.11.2',
                'autoprefixer' => '^10.1.0',
                'postcss' => '^8.2.1',
                'postcss-import' => '^14.0.1',
                'laravel-mix-purgecss' => '^6.0.0',
                'sass' => '^1.32.8',
                'sass-loader' => '^12.0.0',
                'node-sass' => '^6.0.0',
            ];

        ksort($packages['devDependencies']);

        file_put_contents(
            base_path('package.json'),
            json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT).PHP_EOL
        );
    }

    /**
     * Ensure that required directories exists
     *
     * @return void
     */
    protected function ensureDirectoriesExists()
    {
        $ensureDirectoriesExists = [
            // Views
            resource_path('views'),
            resource_path('views/partials'),

            // Sass
            resource_path('sass'),
            resource_path('sass/components'),
            resource_path('sass/plugins'),

            // JS
            resource_path('js/controllers'),

            // Static
            public_path('static')
        ];

        // Ensure directory exists
        foreach($ensureDirectoriesExists as $dir) (new Filesystem)->ensureDirectoryExists($dir);
    }

    /**
     * Copy required directories
     *
     * @return void
     */
    protected function copyDirectories()
    {
        $copyDirectories = [
            // Views
            __DIR__.'/../../stubs/resources/views' => resource_path('views'),
            __DIR__.'/../../stubs/resources/views/partials' => resource_path('views/partials'),

            // Sass
            __DIR__.'/../../stubs/resources/sass' => resource_path('sass'),
            __DIR__.'/../../stubs/resources/sass/components' => resource_path('sass/components'),
            __DIR__.'/../../stubs/resources/sass/plugins' => resource_path('sass/plugins'),

            // JS
            __DIR__.'/../../stubs/resources/js' => resource_path('js'),
            __DIR__.'/../../stubs/resources/js/controllers' => resource_path('js/controllers'),

            // Static
            __DIR__.'/../../stubs/public/static' => public_path('static')
        ];

        foreach ($copyDirectories as $fromDir => $toDir) (new Filesystem)->copyDirectory($fromDir, $toDir);
    }
}
