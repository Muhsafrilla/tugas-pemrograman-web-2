<?php

namespace Database\Seeders;

use App\Models\Series;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Series::create(['brand_id' => 1, 'nama_series' => 'Legion',   'tipe_series' => 'Gaming',    'target_pengguna' => 'Gamer',       'tahun_rilis' => 2016, 'generasi' => 7]);
    Series::create(['brand_id' => 1, 'nama_series' => 'ThinkPad', 'tipe_series' => 'Business',  'target_pengguna' => 'Profesional', 'tahun_rilis' => 1992, 'generasi' => 10]);
    Series::create(['brand_id' => 2, 'nama_series' => 'ROG',      'tipe_series' => 'Gaming',    'target_pengguna' => 'Gamer',       'tahun_rilis' => 2006, 'generasi' => 8]);
    Series::create(['brand_id' => 2, 'nama_series' => 'ZenBook',  'tipe_series' => 'Ultrabook', 'target_pengguna' => 'Profesional', 'tahun_rilis' => 2011, 'generasi' => 6]);
    Series::create(['brand_id' => 3, 'nama_series' => 'Pavilion', 'tipe_series' => 'Casual',    'target_pengguna' => 'Pelajar',     'tahun_rilis' => 1995, 'generasi' => 3]);
    Series::create(['brand_id' => 3, 'nama_series' => 'Spectre',  'tipe_series' => 'Ultrabook', 'target_pengguna' => 'Profesional', 'tahun_rilis' => 2012, 'generasi' => 5]);
    Series::create(['brand_id' => 4, 'nama_series' => 'Aspire',   'tipe_series' => 'Casual',    'target_pengguna' => 'Pelajar',     'tahun_rilis' => 1999, 'generasi' => 6]);
    Series::create(['brand_id' => 4, 'nama_series' => 'Predator', 'tipe_series' => 'Gaming',    'target_pengguna' => 'Gamer',       'tahun_rilis' => 2008, 'generasi' => 5]);
    Series::create(['brand_id' => 4, 'nama_series' => 'MSI',      'tipe_series' => 'Gaming',    'target_pengguna' => 'Gamer',       'tahun_rilis' => 2009, 'generasi' => 9]);
    }
}
