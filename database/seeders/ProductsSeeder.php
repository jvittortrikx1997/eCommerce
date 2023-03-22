<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'macbook',
                'price' => '1200',
                'description' => 'macbook pro',
                'category' => 'eletronic',
                'gallery' => 'https://microimport.com.br/storage/tela-original-macbook-pro-13-polegadas-m1-2020m2-2022.png',
            ],
            [
                'name' => 'iphone',
                'price' => '1200',
                'description' => 'iphone 13',
                'category' => 'phone',
                'gallery' => 'https://imgs.casasbahia.com.br/55048759/1g.jpg?imwidth=500',
            ],
            [
                'name' => 'vans',
                'price' => '200',
                'description' => 'vans42',
                'category' => 'clothes',
                'gallery' => 'https://secure-static.vans.com.br/medias/sys_master/vans/vans/h52/he8/h00/h00/11210870456350/1002001740011U-01-BASEIMAGE-Hires.jpg',
            ]
         ]);
    }
}
