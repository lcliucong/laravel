<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider{
    /**
     *
     * @return void
     *
     */
    public function boot(){

    }

    public function register()
    {
        $this->app->bind('App\Repositories\Interfaces\TestRepositoryInterface','App\Repositories\Testrepository');
    }
}
