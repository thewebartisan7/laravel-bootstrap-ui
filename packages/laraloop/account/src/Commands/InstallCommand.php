<?php

namespace Laraloop\Account\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'account:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Laraloop Account controllers and resources';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->ensureDirectoriesExists();
        $this->copyDirectories();
        copy(__DIR__.'/../../stubs/routes/web.php', base_path('routes/web.php'));

        // Replace "Dashboard" used by Laravel Breeze with "Home"
        $this->replaceInFile('/dashboard', '/home', resource_path('views/welcome.blade.php'));
        $this->replaceInFile('Dashboard', 'Home', resource_path('views/welcome.blade.php'));
        $this->replaceInFile('/dashboard', '/home', app_path('Providers/RouteServiceProvider.php'));

        $this->info('Laraloop Account installed successfully.');

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
            app_path('Http/Controllers/Account'),
            app_path('Http/Controllers/Account/Traits'),

            // Requests
            app_path('Http/Requests/Account'),

            // Rules
            app_path('Rules'),

            // Views
            resource_path('views'),
            resource_path('views/account'),
            resource_path('views/account/partials'),

            // JS
            resource_path('js/controllers')
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
            __DIR__.'/../../stubs/app/Http/Controllers/Account' => app_path('Http/Controllers/Account'),
            __DIR__.'/../../stubs/app/Http/Controllers/Account/Traits' => app_path('Http/Controllers/Account/Traits'),

            // Requests
            __DIR__.'/../../stubs/app/Http/Requests/Account' => app_path('Http/Requests/Account'),

            // Rules
            __DIR__.'/../../stubs/app/Rules' => app_path('Rules'),

            // Views
            __DIR__.'/../../stubs/resources/views' => resource_path('views'),
            __DIR__.'/../../stubs/resources/views/account' => resource_path('views/account'),
            __DIR__.'/../../stubs/resources/views/account/partials' => resource_path('views/account/partials'),

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
