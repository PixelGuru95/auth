<?php

namespace PixelGuru95\Auth;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Publier la config
        $this->mergeConfigFrom(__DIR__ . '/../config/auth-extended.php', 'auth-extended');
    }

    public function boot(): void
    {
        // Publier fichiers
        $this->publishes([
            __DIR__ . '/../config/auth-extended.php' => config_path('auth-extended.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations'),
        ], 'migrations');

        // Charger routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Charger migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
