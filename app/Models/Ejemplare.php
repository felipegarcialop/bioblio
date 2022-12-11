<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ejemplare
 *
 * @property $id
 * @property $libro_id
 * @property $numjemplares
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro $libro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ejemplare extends Model
{
    
    static $rules = [
		'libro_id' => 'required',
		'numjemplares' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['libro_id','numjemplares'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function libro()
    {
        return $this->hasOne('App\Models\Libro', 'id', 'libro_id');
    }
    

}
