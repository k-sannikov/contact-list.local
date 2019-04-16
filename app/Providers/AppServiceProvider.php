<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
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
        Validator::extend('phone_number', function ($attribute, $value, $parameters) {
            if ($attribute == 'phone_mobile' && $value == null) {
                return true;
            }
            if (preg_match('/^(\+)[0-9]{11}/', $value)) {
                return true;
            }
            return false;
        });

        Validator::extend('email_check', function ($attribute, $value, $parameters) {
            if ($attribute == 'email' && $value == null) {
                return true;
            }
            if (preg_match('/.+@.+\..+/i', $value)) {
                return true;
            }
            return false;
        });
    }
}
