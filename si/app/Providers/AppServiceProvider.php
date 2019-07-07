<?php

namespace App\Providers;

use App\Models\Product;
use App\Repositories\Contracts\CategoryInterface;
use App\Repositories\Contracts\IconInterface;
use App\Repositories\Contracts\ProductInterface;
use App\Repositories\EloquentCategoryRepository;
use App\Repositories\EloquentIconRepository;
use App\Repositories\EloquentProductRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CategoryInterface::class,
            EloquentCategoryRepository::class
        );

        $this->app->bind(
            IconInterface::class,
            EloquentIconRepository::class
        );

        $this->app->bind(
            ProductInterface::class,
            EloquentProductRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
