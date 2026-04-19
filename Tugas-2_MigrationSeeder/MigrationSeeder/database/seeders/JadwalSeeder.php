<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $mk_kode = DB::table('matakuliah')->pluck('kode_matakuliah')->toArray();
        $dosen_nidn = DB::table('dosen')->pluck('nidn')->toArray();

        for ($i = 0; $i < 10; $i++) {
            DB::table('jadwal')->insert([
                'kode_matakuliah' => $faker->randomElement($mk_kode),
                'nidn' => $faker->randomElement($dosen_nidn),
                'kelas' => $faker->randomElement(['A', 'B', 'C', 'D']),
                'hari' => $faker->dayOfWeek,
                'jam' => Carbon::now()->addHours($faker->numberBetween(1, 24)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}