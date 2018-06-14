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
        return $this->belongsToMany('App\CelestialBody', 'cb_pub', 'pub_id', 'cb_id');
    }
    public function researcherfellowship()
    {
        return $this->belongsToMany('App\ResearcherFellowship', 'pub_rf', 'pub_id', 'rf_id');
    }
    
}
