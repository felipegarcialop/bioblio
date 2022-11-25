<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clasificacione
 *
 * @property $id
 * @property $desc_clasificacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro[] $libros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Clasificacione extends Model
{
    
    static $rules = [
		'desc_clasificacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['desc_clasificacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany('App\Models\Libro', 'clasificacion_id', 'id');
    }
    

}
