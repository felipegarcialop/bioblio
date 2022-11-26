<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dclasificacione
 *
 * @property $id
 * @property $libros_id
 * @property $clasificaciones_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Clasificacione $clasificacione
 * @property Libro $libro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dclasificacione extends Model
{
    
    static $rules = [
		'libros_id' => 'required',
		'clasificaciones_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['libros_id','clasificaciones_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clasificacione()
    {
        return $this->hasOne('App\Models\Clasificacione', 'id', 'clasificaciones_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function libro()
    {
        return $this->hasOne('App\Models\Libro', 'id', 'libros_id');
    }
    

}
