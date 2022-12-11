<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $nom_libro
 * @property $anio_pub
 * @property $editorial_id
 * @property $clasificaciones_id
 * @property $escritores_id
 * @property $Copias
 * @property $created_at
 * @property $updated_at
 *
 * @property Clasificacione $clasificacione
 * @property Dlibro[] $dlibros
 * @property Editoriale $editoriale
 * @property Estante[] $estantes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'nom_libro' => 'required',
		'anio_pub' => 'required',
		'editorial_id' => 'required',
		'clasificaciones_id' => 'required',
		'escritores_id' => 'required',
		'Copias' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom_libro','anio_pub','editorial_id','clasificaciones_id','escritores_id','Copias'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clasificacione()
    {
        return $this->hasOne('App\Models\Clasificacione', 'id', 'clasificaciones_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dlibros()
    {
        return $this->hasMany('App\Models\Dlibro', 'libro_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function editoriale()
    {
        return $this->hasOne('App\Models\Editoriale', 'id', 'editorial_id');
    }
    public function escritore()
    {
        return $this->hasOne('App\Models\Escritore', 'id', 'escritores_id');
    }
    
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estantes()
    {
        return $this->hasMany('App\Models\Estante', 'libro_id', 'id');
    }
    

}
