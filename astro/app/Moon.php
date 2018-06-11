<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moon extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'moons';

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
    protected $fillable = ['planet_id', 'orbital_period', 'radius'];

    public function planet()
    {
        return $this->belongsTo('App\Planet');
    }
    public function celestialbody()
    {
        return $this->belongsTo('App\CelestialBody');
    }
    
}
