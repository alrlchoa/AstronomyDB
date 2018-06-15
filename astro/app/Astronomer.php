<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Astronomer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'astronomers';

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
    protected $fillable = ['username', 'password', 'first_name', 'last_name'];

    public function researcher()
    {
        return $this->hasOne('App\ResearcherFellowship');
    }
    public function celestialbody()
    {
        return $this->belongsToMany('App\CelestialBody', 'discoveries', 'discoverer_id', 'cb_id');
    }
    
}
