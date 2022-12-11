<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estante
 *
 * @property $id
 * @property $user_id
 * @property $libro_id
 * @property $fecha_pres
 * @property $fecha_dev
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro $libro
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estante extends Model
{
    
    static $rules = [
		'user_id' => 'required',
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
    protected $fillable = ['user_id','libro_id','fecha_pres','fecha_dev'];


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
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
