<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class niveau_etudeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        
        DB::table('niveau_etude')->insert([
            'code' => "L",
            'designation' => "Licence",
        ]);

        DB::table('niveau_etude')->insert([
            'code' => "MS",
            'designation' => "Master Spécialisé",
        ]);

        DB::table('niveau_etude')->insert([
            'code' => "MP",
            'designation' => "Master Professionnel",
        ]);

        DB::table('niveau_etude')->insert([
            'code' => "MST",
            'designation' => "Master Sciences et Techniques",
        ]);

        DB::table('niveau_etude')->insert([
            'code' => "PhD",
            'designation' => "Doctora",
        ]);
    }
}
