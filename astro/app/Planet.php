<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'planets';

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
    protected $fillable = ['orbital_period', 'planet_type'];

    public function moon()
    {
        return $this->hasMany('App\Moon');
    }
    public function star()
    {
        return $this->belongsToMany('App\Star');
    }
    
}
