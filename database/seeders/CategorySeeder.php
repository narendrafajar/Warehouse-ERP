<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = [
            ['code'=> 'C250816000001', 'name'=>'Sealware'],
            ['code'=> 'C250816000002', 'name'=>'Nampan'],
            ['code'=> 'C250816000003', 'name'=>'Piring Plastik'],
        ];

        DB::table('category')->insert($seed);
    }
}
