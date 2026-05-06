<?php

declare(strict_types=1);

namespace MobikulLoader;

use Illuminate\Support\ServiceProvider;

class MobikulLoaderServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('mobikul-loader', function (): MobikulLoaderPlugin {
            return new MobikulLoaderPlugin();
        });
    }
}
