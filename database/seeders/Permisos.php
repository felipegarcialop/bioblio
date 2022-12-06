<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Permisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos=[
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //opeaciones con libros

            'ver-libro',
            'crear-libro',
            'editar-libro',
            'borrar-libro',

            //permisos para usuario

            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',


            'ver-autor',
            'crear-autor',
            'editar-autor',
            'borrar-autor',

            'ver-clasificacion',
            'crear-clasificacion',
            'editar-clasificaion',
            'borrar-clasificacion',

            'ver-editorial',
            'crear-editorial',
            'editar-editorial',
            'borrar-editorial',

            'ver-estante',
            'crear-estante',
            'editar-estante',
            'borrar-estante'
        ];

        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
