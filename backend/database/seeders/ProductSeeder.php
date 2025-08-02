<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
            'nombres'=>('Hilux'),
            'precio'=>('50.000'),
            'marca_id'=>1,
            'created_at'=> now(),
            'updated_at'=> now(),

            ],
            [
                'nombres'=>('Salomon'),
                'precio'=>('20.000'),
                'marca_id'=>2,
                'created_at'=> now(),
                'updated_at'=> now(),
    
            ]
        ]
    );
    }
}
