<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Escritore;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $escritores=[
            'nombre',
            'chinos'
        ];

        forech ($escritores as $Escritore )
        {
        Escritores:: create([
            'name'=>$Escritore
        ]);
        }
    }
}
