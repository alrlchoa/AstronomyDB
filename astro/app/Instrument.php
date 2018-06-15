<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'instruments';

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
    protected $fillable = ['mid', 'location'];

    public function instrumodel()
    {
        return $this->belongsTo('App\InstruModel');
    }

    public function discovery()
    {
        return $this->hasMany('App\Discovery');
    }
    
}
