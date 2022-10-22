<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'part' => 'head',
            'service_name' => 'ubah_head',
            'estimasi_waktu' => 5,
            'biaya' => 50000
        ]);

        DB::table('services')->insert([
            'part' => 'head',
            'service_name' => 'refinish_head',
            'estimasi_waktu' => 7,
            'biaya' => 70000
        ]);

        DB::table('services')->insert([
            'part' => 'head',
            'service_name' => 'ubah_tuning_machine',
            'estimasi_waktu' => 8,
            'biaya' => 80000
        ]);

        DB::table('services')->insert([
            'part' => 'head',
            'service_name' => 'refinish_tuning_machine',
            'estimasi_waktu' => 9,
            'biaya' => 90000
        ]);

        DB::table('services')->insert([
            'part' => 'head',
            'service_name' => 'ubah_nut',
            'estimasi_waktu' => 3,
            'biaya' => 30000
        ]);

        DB::table('services')->insert([
            'part' => 'head',
            'service_name' => 'refinish_nut',
            'estimasi_waktu' => 4,
            'biaya' => 30000
        ]);

        DB::table('services')->insert([
            'part' => 'neck',
            'service_name' => 'ubah_neck',
            'estimasi_waktu' => 5,
            'biaya' => 50000
        ]);

        DB::table('services')->insert([
            'part' => 'neck',
            'service_name' => 'refinish_neck',
            'estimasi_waktu' => 7,
            'biaya' => 70000
        ]);

        DB::table('services')->insert([
            'part' => 'neck',
            'service_name' => 'ubah_fret',
            'estimasi_waktu' => 5,
            'biaya' => 50000
        ]);

        DB::table('services')->insert([
            'part' => 'neck',
            'service_name' => 'refinish_fret',
            'estimasi_waktu' => 6,
            'biaya' => 60000
        ]);

        DB::table('services')->insert([
            'part' => 'neck',
            'service_name' => 'ubah_pickup',
            'estimasi_waktu' => 5,
            'biaya' => 50000
        ]);

        DB::table('services')->insert([
            'part' => 'neck',
            'service_name' => 'refinish_pickup',
            'estimasi_waktu' => 5,
            'biaya' => 50000
        ]);

        DB::table('services')->insert([
            'part' => 'body',
            'service_name' => 'ubah_body',
            'estimasi_waktu' => 5,
            'biaya' => 50000
        ]);

        DB::table('services')->insert([
            'part' => 'body',
            'service_name' => 'refinish_body',
            'estimasi_waktu' => 7,
            'biaya' => 70000
        ]);

        DB::table('services')->insert([
            'part' => 'body',
            'service_name' => 'ubah_saddle',
            'estimasi_waktu' => 7,
            'biaya' => 70000
        ]);
        
        DB::table('services')->insert([
            'part' => 'body',
            'service_name' => 'refinish_saddle',
            'estimasi_waktu' => 7,
            'biaya' => 80000
        ]);

        DB::table('services')->insert([
            'part' => 'body',
            'service_name' => 'ubah_bridge',
            'estimasi_waktu' => 7,
            'biaya' => 80000
        ]);

        DB::table('services')->insert([
            'part' => 'body',
            'service_name' => 'refinish_bridge',
            'estimasi_waktu' => 7,
            'biaya' => 80000
        ]);

        DB::table('services')->insert([
            'part' => 'body',
            'service_name' => 'ubah_pin',
            'estimasi_waktu' => 7,
            'biaya' => 80000
        ]);

        DB::table('services')->insert([
            'part' => 'body',
            'service_name' => 'refinish_pin',
            'estimasi_waktu' => 7,
            'biaya' => 80000
        ]);
    }
}
