<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp;
use File;

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=File::get('database/_data/bootcamps.json');
        $arreglo_bootcamps=json_decode($json);
        foreach($arreglo_bootcamps as $usuario){
            //4.registrar el usuario en bd
            //se utiliza el metodo ::create
            Bootcamp::Create([
                "name" => $usuario->name,
                "description" => $usuario->description,
                "website" => $usuario->website,
                "phone" => $usuario->phone,
                "user_id" => $usuario->user_id
            ]);
        }

    }
}
