<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate ;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Gate::define('admin',function(User $user){
            return $user->role === 'Administrator';
        });

        Blade::if('admin', function () {
            return request()->user()?->can('admin');
        });

        Gate::define('editor', function(User $user){
            return $user->role === 'Editor';
        });
        
        Blade::if('editor', function () {
            return request()->user()?->can('editor');
        });

    }
}
