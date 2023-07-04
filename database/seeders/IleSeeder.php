<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('iles')->insert([
            'designation' => "Ngazidja",
        ]);

        DB::table('iles')->insert([
            'designation' => "Anjouan",
        ]);

        DB::table('iles')->insert([
            'designation' => "Moheli",
        ]);
    }
}
