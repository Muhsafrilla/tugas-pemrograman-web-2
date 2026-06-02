<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create(['nama_brand' => 'LENOVO', 'negara_asal' => 'TIONGKOK',       'tahun_berdiri' => 1984]);
        Brand::create(['nama_brand' => 'ASUS',   'negara_asal' => 'TAIWAN',         'tahun_berdiri' => 1939]);
        Brand::create(['nama_brand' => 'HP',     'negara_asal' => 'TAIWAN',         'tahun_berdiri' => 1976]);
        Brand::create(['nama_brand' => 'ACER',   'negara_asal' => 'AMERIKA SERIKAT','tahun_berdiri' => 1989]);
    }
}
