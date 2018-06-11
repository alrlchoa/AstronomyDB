<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CelestialBody extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'celestial_bodies';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['right_ascension', 'declination', 'name', 'verified'];

    public function astronomer()
    {
        return $this->belongsToMany('App\Astronomer');
    }
    public function publication()
    {
        return $this->belongsToMany('App\Publication');
    }
    public function comet()
    {
        return $this->hasOne('App\Comet');
    }
    public function star()
    {
        return $this->hasOne('App\Star');
    }
    public function planet()
    {
        return $this->hasOne('App\Planet');
    }
    public function moon()
    {
        return $this->hasOne('App\Moon');
    }
    public function galaxy()
    {
        return $this->hasOne('App\Galaxy');
    }
    
}
