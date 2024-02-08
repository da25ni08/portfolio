<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = new Project();
        $project->name = "Prueba1";
        $project->description = "Prueba 1";
        $project->categories_id = "1";
        $project->personal_data_id= "1";
        $project->save();

        $project = new Project();
        $project->name = "Prueba2";
        $project->description = "Prueba 2";
        $project->categories_id = "2";
        $project->personal_data_id= "1";
        $project->save();

        $project = new Project();
        $project->name = "Prueaba3";
        $project->description = "Prueba 3";
        $project->categories_id = "3";
        $project->personal_data_id= "1";
        $project->save();
    }
}
