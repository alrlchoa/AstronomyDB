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

    public function referrer()
    {
        return $this->belongsToMany('App\Publication', 'publication_references', 'referrer_id', 'reference_id');
    }
    public function reference()
    {
        return $this->belongsToMany('App\Publication', 'publication_references', 'reference_id', 'referrer_id');
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
