<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpectralBrightness extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'spectral_brightnesses';

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
    protected $fillable = ['spectral_type', 'brightness'];

    public function star()
    {
        return $this->hasMany('App\Star');
    }
    
}
