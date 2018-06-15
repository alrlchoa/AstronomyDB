<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discovery extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'discoveries';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date_of_discovery'];

    public function instrument()
    {
        return $this->belongsTo('App\Instrument');
    }
}
