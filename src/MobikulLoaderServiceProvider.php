<?php

declare(strict_types=1);

namespace MobikulLoader;

use Illuminate\Support\ServiceProvider;

class MobikulLoaderServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../assets' => public_path('vendor/mobikul_loader'),
        ], 'mobikul-loader-assets');
    }

    public function register(): void
    {
        $this->app->singleton('mobikul-loader', function (): MobikulLoaderPlugin {
            return new MobikulLoaderPlugin();
        });
    }
}
