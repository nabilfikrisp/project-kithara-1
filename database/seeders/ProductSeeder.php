<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama' => 'headstock',
            'harga' => 20000,
            'gambar' => 'headstock.jpg',
            'item_type_id' => 1
        ]);
        DB::table('products')->insert([
            'nama' => 'tuning machine stock',
            'harga' => 30000,
            'gambar' => 'tuning.jpg',
            'item_type_id' => 2
        ]);
        DB::table('products')->insert([
            'nama' => 'nutstock',
            'harga' => 30000,
            'gambar' => 'nutstock.jpg',
            'item_type_id' => 3
        ]);
        DB::table('products')->insert([
            'nama' => 'neckstock',
            'harga' => 30000,
            'gambar' => 'neckstock.jpg',
            'item_type_id' => 4
        ]);
        DB::table('products')->insert([
            'nama' => 'fretstock',
            'harga' => 10000,
            'gambar' => 'fretstock.jpg',
            'item_type_id' => 5
        ]);
        DB::table('products')->insert([
            'nama' => 'pickupstock',
            'harga' => 90000,
            'gambar' => 'pickupstock.jpg',
            'item_type_id' => 6
        ]);
        DB::table('products')->insert([
            'nama' => 'bodystock',
            'harga' => 40000,
            'gambar' => 'bodystock.jpg',
            'item_type_id' => 7
        ]);
        DB::table('products')->insert([
            'nama' => 'saddlestock',
            'harga' => 40000,
            'gambar' => 'saddlestock.jpg',
            'item_type_id' => 8
        ]);
        DB::table('products')->insert([
            'nama' => 'bridgestock',
            'harga' => 50000,
            'gambar' => 'bridgestock.jpg',
            'item_type_id' => 9
        ]);
        DB::table('products')->insert([
            'nama' => 'pinstock',
            'harga' => 70000,
            'gambar' => 'pinstock.jpg',
            'item_type_id' => 10
        ]);
    }
}
