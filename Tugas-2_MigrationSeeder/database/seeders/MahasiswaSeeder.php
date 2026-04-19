<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $dosen_nidn = DB::table('dosen')->pluck('nidn')->toArray(); // Ambil semua NIDN yang ada

        for ($i = 0; $i < 10; $i++) {
            DB::table('mahasiswa')->insert([
                'npm' => $faker->numerify('##########'),
                'nidn' => $faker->randomElement($dosen_nidn),
                'nama' => $faker->name,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}