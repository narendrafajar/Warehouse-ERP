<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = [
            ['supplier_code'=> 'S250816000001', 'supplier_name'=>'Calista Premium'],
            ['supplier_code'=> 'S250816000002', 'supplier_name'=>'WOK'],
            ['supplier_code'=> 'S250816000003', 'supplier_name'=>'Jadi Jaya'],
        ];

        DB::table('supplier')->insert($seed);
    }
}
