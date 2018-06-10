<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'institutions';

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
    protected $fillable = ['name'];

    public function researcherFellowship()
    {
        return $this->hasMany('App\ResearcherFellowship');
    }
    
}
