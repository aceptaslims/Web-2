<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $npm_mhs = DB::table('mahasiswa')->pluck('npm')->toArray();
        $mk_kode = DB::table('matakuliah')->pluck('kode_matakuliah')->toArray();

        for ($i = 0; $i < 15; $i++) {
            DB::table('krs')->insert([
                'npm' => $faker->randomElement($npm_mhs),
                'kode_matakuliah' => $faker->randomElement($mk_kode),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}