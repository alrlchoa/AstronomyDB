<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearcherFellowship extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'researcher_fellowships';

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
    protected $fillable = ['institution_id'];

    public function institution()
    {
        return $this->belongsTo('App\Institution');
    }
    public function publication()
    {
        return $this->belongsToMany('App\Publication');
    }
    public function astronomer()
    {
        return $this->belongsTo('App\Astronomer');
    }
    
}
