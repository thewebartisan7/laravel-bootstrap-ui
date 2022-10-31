<?php

namespace Laraloop\Auth\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auth:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Laraloop Auth controllers and resources';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->ensureDirectoriesExists();
        $this->copyDirectories();

        // Routes...
        copy(__DIR__.'/../../stubs/routes/web.php', base_path('routes/web.php'));

        // Replace "Dashboard" used by Laravel Breeze with "Home"
        $this->replaceInFile('/dashboard', '/home', resource_path('views/welcome.blade.php'));
        $this->replaceInFile('Dashboard', 'Home', resource_path('views/welcome.blade.php'));
        $this->replaceInFile('/dashboard', '/home', app_path('Providers/RouteServiceProvider.php'));

        $this->info('Laraloop Auth installed successfully.');

        return self::SUCCESS;
    }


    /**
     * Ensure that required directories exists
     *
     * @return void
     */
    protected function ensureDirectoriesExists()
    {
        $ensureDirectoriesExists = [
            // Controllers
            app_path('Http/Controllers/Auth'),

            // Requests
            app_path('Http/Requests/Auth'),

            // View Components
            app_path('View/Components'),

            // Views
            resource_path('views'),
            resource_path('views/auth'),
            resource_path('views/components'),
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
            // Controllers
            __DIR__.'/../../stubs/App/Http/Controllers/Auth' => app_path('Http/Controllers/Auth'),

            // Requests
            __DIR__.'/../../stubs/App/Http/Requests/Auth' => app_path('Http/Requests/Auth'),

            // View Components
            __DIR__.'/../../stubs/App/View/Components' => app_path('View/Components'),

            // Views
            __DIR__.'/../../stubs/resources/views' => resource_path('views'),
            __DIR__.'/../../stubs/resources/views/auth' => resource_path('views/auth'),
            __DIR__.'/../../stubs/resources/views/components' => resource_path('views/components'),

            // JavaScript
            __DIR__.'/../../stubs/resources/js/controllers' => resource_path('js/controllers')
        ];

        foreach ($copyDirectories as $fromDir => $toDir) (new Filesystem)->copyDirectory($fromDir, $toDir);
    }

    /**
     * Replace a given string within a given file.
     *
     * @param  string  $search
     * @param  string  $replace
     * @param  string  $path
     * @return void
     */
    protected function replaceInFile($search, $replace, $path)
    {
        file_put_contents($path, str_replace($search, $replace, file_get_contents($path)));
    }
}
