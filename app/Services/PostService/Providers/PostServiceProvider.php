<?php

namespace App\Services\PostService\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PostService\Repositories\PostServiceRepository;
use App\Services\PostService\Repositories\PostServiceInterface;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        match ($this->app->environment()) {
            default => $this->app->bind(PostServiceInterface::class, PostServiceRepository::class),
        };
    }
}