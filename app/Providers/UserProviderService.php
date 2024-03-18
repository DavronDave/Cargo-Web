<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class UserProviderService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('current_user', function ($app) {
            return User::getCurrentUser();
        });

        $this->app->bind('userPermission', function ($app) {
            return User::getCurrentPermissions();
        });
    }

    public function boot()
    {
        View::composer(['admin.*'], function ($view) {
            $view->with('current_user', $this->app->make('current_user'))
                ->with('userPermission', $this->app->make('userPermission'));
        });
    }
}
