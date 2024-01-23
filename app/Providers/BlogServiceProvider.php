<?php

namespace App\Providers;

use App\Repositories\PostRepository;
use App\Services\BlogService;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BlogService::class, function () {
            return new BlogService($this->app->make(PostRepository::class));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
