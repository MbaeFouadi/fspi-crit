<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('type_production_scientifiques')->insert([
            'designation' => "Communications",
        ]);

        DB::table('type_production_scientifiques')->insert([
            'designation' => "Articles",
        ]);

        DB::table('type_production_scientifiques')->insert([
            'designation' => "Ouvrages",
        ]);
    }
}
