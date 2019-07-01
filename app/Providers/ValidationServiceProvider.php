<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
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
        Validator::extend('phone_number', function ($attribute, $value, $parameters) {
            if (preg_match('/^(\+)[0-9]{11}/', $value)) {
                return true;
            }
            return false;
        });

        Validator::extend('email_check', function ($attribute, $value, $parameters) {
            if (preg_match('/.+@.+\..+/i', $value)) {
                return true;
            }
            return false;
        });
    }
}
