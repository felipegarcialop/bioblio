<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $nom_libro
 * @property $codigo
 * @property $anio_pub
 * @property $editorial_id
 * @property $clasificacion_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Clasificacione $clasificacione
 * @property Editoriale $editoriale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'nom_libro' => 'required',
		'codigo' => 'required',
		'anio_pub' => 'required',
		'editorial_id' => 'required',
		'clasificacion_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom_libro','codigo','anio_pub','editorial_id','clasificacion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clasificacione()
    {
        return $this->hasOne('App\Models\Clasificacione', 'id', 'clasificacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function editoriale()
    {
        return $this->hasOne('App\Models\Editoriale', 'id', 'editorial_id');
    }
    

}
