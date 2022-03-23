<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

use Carbon\Carbon;

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
        Paginator::useBootstrap();
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');

        Gate::define('pembina', function(User $user){
            return $user->role === "pembina" || $user->role === "admin";
        });
        
        Gate::define('author', function(User $user){
            return $user->role === "author" || $user->role === "admin";
        });
        
        Gate::define('admin', function(User $user){
            return $user->role === "admin";
        });

    }
}
