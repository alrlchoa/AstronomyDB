<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galaxy extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'galaxies';

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
    protected $fillable = ['brightness', 'redshift', 'type'];

    public function celestialbody()
    {
        return $this->belongsTo('App\CelestialBody');
    }

    
}
