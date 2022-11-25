<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $nom
 * @property $ap
 * @property $am
 * @property $tpersonas_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Tpersona $tpersona
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'nom' => 'required',
		'ap' => 'required',
		'am' => 'required',
		'tpersonas_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom','ap','am','tpersonas_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tpersona()
    {
        return $this->hasOne('App\Models\Tpersona', 'id', 'tpersonas_id');
    }
    

}
