<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_types')->insert([
            'nama' => 'head',
            'gambar' => 'head.png'
        ]);
        DB::table('item_types')->insert([
            'nama' => 'tuning machine',
            'gambar' => 'tuning_machine.png'
        ]);
        DB::table('item_types')->insert([
            'nama' => 'nut',
            'gambar' => 'nut.png'
        ]);
        DB::table('item_types')->insert([
            'nama' => 'neck',
            'gambar' => 'neck.png'
        ]);
        DB::table('item_types')->insert([
            'nama' => 'fret',
            'gambar' => 'fret.png'
        ]);
        DB::table('item_types')->insert([
            'nama' => 'pickup',
            'gambar' => 'pickup.png'
        ]);
        DB::table('item_types')->insert([
            'nama' => 'body',
            'gambar' => 'body.png'
        ]);
        DB::table('item_types')->insert([
            'nama' => 'saddle',
            'gambar' => 'saddle.png'
        ]);
        DB::table('item_types')->insert([
            'nama' => 'bridge',
            'gambar' => 'bridge.png'
        ]);
        DB::table('item_types')->insert([
            'nama' => 'pin',
            'gambar' => 'pin.png'
        ]);
    }
}
