<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dlibro
 *
 * @property $id
 * @property $libro_id
 * @property $escritores_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Escritore $escritore
 * @property Libro $libro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dlibro extends Model
{
    
    static $rules = [
		'libro_id' => 'required',
		'escritores_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['libro_id','escritores_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function escritore()
    {
        return $this->hasOne('App\Models\Escritore', 'id', 'escritores_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function libro()
    {
        return $this->hasOne('App\Models\Libro', 'id', 'libro_id');
    }
    

}
