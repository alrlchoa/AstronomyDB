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

        Validator::extend('userIsRF', function ($attribute, $value, $parameters, $validator) {

            $id = DB::table('astronomers')->where('username',$value)
                ->first()->id;
            $count = DB::table('researcher_fellowships')->where('id', $id)
                ->count();

            return $count > 0;
        }, 'User is not a researcher.');
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
