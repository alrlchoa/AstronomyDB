<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'stars';

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
    protected $fillable = ['spectral_brightness_id'];

    public function comet()
    {
        return $this->belongsToMany('App\Comet');
    }
    public function planet()
    {
        return $this->belongsToMany('App\Planet');
    }
    public function celestialbody()
    {
        return $this->belongsTo('App\CelestialBody');
    }
    
}
