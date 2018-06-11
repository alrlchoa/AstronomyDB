<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'publications';

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
    protected $fillable = ['doi', 'date_of_publication'];

    public function publication()
    {
        return $this->belongsToMany('App\Publication');
    }
    public function celestialbody()
    {
        return $this->belongsToMany('App\CelestialBody');
    }
    public function researcher()
    {
        return $this->belongsToMany('App\Researcher');
    }
    
}
