<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = [
            ['code'=> 'NP189S', 'category_id'=>'1', 'supplier_id' => '1','product_name' => 'Nampan Baki Silver Gambar-NP189S', 'price' => 87400, 'disc' => NULL, 'moq' => 0.5, 'supplier_name' => 'Nampan 189 Silver Gambar', 'sale_vol' => 'LSN'],
            ['code'=> 'DS01M', 'category_id'=>'1', 'supplier_id' => '1','product_name' => 'Sendok Makan SS Verbana Isi 6-DS01M', 'price' => 34900, 'disc' => NULL, 'moq' => 0.5, 'supplier_name' => 'DS01', 'sale_vol' => 'PACK'],
            ['code'=> 'DO24TDKM', 'category_id'=>'2', 'supplier_id' => '2','product_name' => 'Panci Dutch Oven SS Ttp Kaca 24cm-DO24TDKM', 'price' => 87400, 'disc' => NULL, 'moq' => 0.5, 'supplier_name' => 'DO24TDK', 'sale_vol' => 'LSN'],
            ['code'=> 'TBWS36M', 'category_id'=>'2', 'supplier_id' => '2','product_name' => 'Wajan SS Pegangan PJG 36cm-TBWS36M', 'price' => 87400, 'disc' => NULL, 'moq' => 0.5, 'supplier_name' => 'TBWS36', 'sale_vol' => 'LSN'],
            ['code'=> 'TS008C', 'category_id'=>'3', 'supplier_id' => '3','product_name' => 'Keranjang Sendok S008 Cemerlang-TS008C', 'price' => 87400, 'disc' => NULL, 'moq' => 0.5, 'supplier_name' => 'Tempat Sendok 008 S Cemerlang', 'sale_vol' => 'LSN'],
            ['code'=> 'EP30HJT', 'category_id'=>'3', 'supplier_id' => '3','product_name' => 'Ember Tutup 30 Hijau-EP30HJT', 'price' => 87400, 'disc' => NULL, 'moq' => 0.5, 'supplier_name' => 'Pail 30 Hijau', 'sale_vol' => 'LSN'],
        ];

        DB::table('product')->insert($seed);
    }
}
