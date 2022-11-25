<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tpersona
 *
 * @property $id
 * @property $desc_tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Persona[] $personas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tpersona extends Model
{
    
    static $rules = [
		'desc_tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['desc_tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personas()
    {
        return $this->hasMany('App\Models\Persona', 'tpersonas_id', 'id');
    }
    

}
