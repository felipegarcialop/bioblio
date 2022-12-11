<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Escritore
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Dlibro[] $dlibros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Escritore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dlibros()
    {
        return $this->hasMany('App\Models\Dlibro', 'escritores_id', 'id');
    }
    

}
