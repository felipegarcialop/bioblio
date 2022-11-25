<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Editoriale
 *
 * @property $id
 * @property $nom_editorial
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro[] $libros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Editoriale extends Model
{
    
    static $rules = [
		'nom_editorial' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom_editorial'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany('App\Models\Libro', 'editorial_id', 'id');
    }
    

}
