<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KorbanJlwSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('korban_jlw')->insert([
            [
                'luka_berat' => 5,
                'luka_ringan' => 10,
                'meninggal' => 2,
                'hilang' => 1,
                'mengungsi' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'luka_berat' => 3,
                'luka_ringan' => 8,
                'meninggal' => 1,
                'hilang' => 0,
                'mengungsi' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'luka_berat' => 2,
                'luka_ringan' => 5,
                'meninggal' => 2,
                'hilang' => 1,
                'mengungsi' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'luka_berat' => 4,
                'luka_ringan' => 10,
                'meninggal' => 3,
                'hilang' => 0,
                'mengungsi' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'luka_berat' => 1,
                'luka_ringan' => 7,
                'meninggal' => 1,
                'hilang' => 2,
                'mengungsi' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],            
            // Add more records as needed
        ]);
    }
}
