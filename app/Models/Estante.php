<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estante
 *
 * @property $id
 * @property $persona_id
 * @property $libro_id
 * @property $fecha_pres
 * @property $fecha_dev
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro $libro
 * @property Persona $persona
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estante extends Model
{
    
    static $rules = [
		'persona_id' => 'required',
		'libro_id' => 'required',
		'fecha_pres' => 'required',
		'fecha_dev' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['persona_id','libro_id','fecha_pres','fecha_dev'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function libro()
    {
        return $this->hasOne('App\Models\Libro', 'id', 'libro_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'id', 'persona_id');
    }
    

}
