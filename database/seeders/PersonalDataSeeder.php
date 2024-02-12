<?php

namespace Database\Seeders;

use App\Models\PersonalData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonalDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos_personales = new PersonalData();
        $datos_personales->name = 'Daniel Delgado Pérez';
        $datos_personales->adress = 'a';
        $datos_personales->genre = 'a';
        $datos_personales->age = '21';
        $datos_personales->tel = '+34 663 47 43 96';
        $datos_personales->description = 'Hola';
        $datos_personales->save();
    }
}
