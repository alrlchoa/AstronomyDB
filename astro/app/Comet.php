<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comet extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comets';

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
    protected $fillable = ['speed'];

    public function star()
    {
        return $this->belongsToMany('App\Star');
    }

    public function celestialbody()
    {
        return $this->belongsTo('App\CelestialBody');
    }
    
}
