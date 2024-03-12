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

        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['admin.*'], function ($view) {
            $view->with(
                'current_user', User::getCurrentUser()
            )
                ->with(
                    'userPermission', User::getCurrentPermissions()
                );
        });
    }
}
