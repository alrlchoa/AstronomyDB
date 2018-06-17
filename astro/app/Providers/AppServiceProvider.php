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

        Validator::extend('userIsRF', function ($attribute, $value, $parameters, $validator) {

            $id = DB::table('astronomers')->where('username',$value)
                ->first();
            if (!$id){
                return false;
            } else{
                $id = $id->id;
            }
            $count = DB::table('researcher_fellowships')->where('id', $id)
                ->count();

            return $count > 0;
        }, 'User is not a researcher.');

        Validator::extend('currUserIsRF', function ($attribute, $value, $parameters, $validator) {

            $id = DB::table('astronomers')->where('username',$value)
                ->first();
            if (!$id){
                return false;
            } else{
                $id = $id->id;
            }
            $count = DB::table('researcher_fellowships')->where('id', $id)
                ->count();

            return $count > 0;
        }, 'You must be a researcher to use this functionality.');

        Validator::extend('uniqueCbPub', function ($attribute, $value, $parameters, $validator) {
            $param1 = array_get($validator->getData(), $parameters[0]);

            $pubID = DB::table('publications')->where('doi',$value)
                ->first();
            if($pubID){
                $pubID = $pubID->id;
            }else{
                return false;
            };

            $count = DB::table('cb_pub')->where('pub_id', $pubID)
                                        ->where('cb_id', $param1)
                                        ->count();
        
            return $count == 0;
        }, '(Celestial Body, Publication) combination has already been used or Publication does not exist.');

        Validator::extend('uniquePubRef', function ($attribute, $value, $parameters, $validator) {
            $param1 = array_get($validator->getData(), $parameters[0]);

            $pubID = DB::table('publications')
                ->where('doi',$value)
                ->pluck('id')
                ->first();

            $count = DB::table('publication_references')->where('referrer_id', $param1)
                ->where('reference_id', $pubID)
                ->count();

            return $count == 0;
        }, 'Cannot add reference. This reference already exists.');

        Validator::extend('uniquePubAuth', function ($attribute, $value, $parameters, $validator) {
            $param1 = array_get($validator->getData(), $parameters[0]);

            $authorID = DB::table('researcher_fellowships')
                ->join('astronomers', 'researcher_fellowships.id', '=', 'astronomers.id')
                ->where('username', $value)
                ->pluck('researcher_fellowships.id')
                ->first();

            $count = DB::table('pub_rf')->where('pub_id', $param1)
                ->where('rf_id', $authorID)
                ->count();
            return $count == 0;
        }, 'Cannot add Author. This author already is listed on this publication.');

        Validator::extend('noSelfRefs', function ($attribute, $value, $parameters, $validator) {
            $param1 = array_get($validator->getData(), $parameters[0]);

            $pubID = DB::table('publications')
                ->where('doi',$value)
                ->pluck('id')
                ->first();
            return $pubID != $param1;
        }, 'Cannot add reference. A publication may not reference itself.');
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
