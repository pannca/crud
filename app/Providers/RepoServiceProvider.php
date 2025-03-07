<?php

namespace App\Providers;

use App\Models\Rayon;
use App\Repository\SiswaImplements;
use App\Repository\RayonImplements;
use Illuminate\Support\ServiceProvider;
use  App\Repository\SiswaRepository;
use  App\Repository\RayonRepository;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SiswaRepository::class,SiswaImplements::class);
        $this->app->bind(RayonRepository::class,RayonImplements::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
