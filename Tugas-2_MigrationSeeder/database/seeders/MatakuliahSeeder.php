<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 5; $i++) {
            DB::table('matakuliah')->insert([
                'kode_matakuliah' => strtoupper($faker->lexify('MK??????')),
                'nama_matakuliah' => $faker->words(3, true),
                'sks' => $faker->numberBetween(2, 4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}