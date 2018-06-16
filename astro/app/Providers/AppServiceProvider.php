<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Validator::extend('uniqueRaD', function ($attribute, $value, $parameters, $validator) {
            $param1 = array_get($validator->getData(), $parameters[0]);

            $count = DB::table('celestial_bodies')->where('right_ascension', $value)
                                        ->where('declination', $param1)
                                        ->count();
        
            return $count == 0;
        }, 'Right Ascension and Declination combination has already been used.');

        Validator::extend('uniqueRaDUp', function ($attribute, $value, $parameters, $validator) {
            $declination = array_get($validator->getData(), $parameters[0]);
            $id = array_get($validator->getData(), $parameters[1]);

            $count = DB::table('celestial_bodies')->where('right_ascension', $value)
                                        ->where('declination', $declination)
                                        ->where('id', '!=', $id)
                                        ->count();
        
            return $count == 0;
        }, 'Right Ascension and Declination combination has already been used by  a different Celestial Body.');

        Validator::extend('uniqueMidLoc', function ($attribute, $value, $parameters, $validator) {
            $param1 = array_get($validator->getData(), $parameters[0]);

            $count = DB::table('instruments')->where('mid', $value)
                ->where('location', $param1)
                ->count();

            return $count == 0;
        }, 'Model ID and Location has already been used.');

        Validator::extend('bet', function ($attribute, $value, $parameters, $validator) {
            $param0 = $parameters[0];
            $param1 = $parameters[1];

            return $value>=$param0 && $value<=$param1;
        }, " The :attribute should be between :param0 and :param1");

        Validator::replacer('bet', function ($message, $attribute, $rule, $parameters) {
            return str_replace([':param0',':param1'],$parameters,$message);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
