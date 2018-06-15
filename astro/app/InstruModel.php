<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstruModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'instru_models';

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
    protected $fillable = ['type'];

    public function instrument()
    {
        return $this->hasMany('App\Instrument');
    }
    
}
