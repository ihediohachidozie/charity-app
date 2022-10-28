<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HelptypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $needs = array('Food', 'Money', 'Cloth');
        foreach($needs as $need){

            DB::table('helptypes')->insert([
                'type' => $need,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
