<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PetugasPoskoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('petugas_posko')->insert([
            [
                'nama_lengkap' => 'Ahmad Ali',
                'kontak' => 'ahmad.ali@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_lengkap' => 'Fatimah Zahra',
                'kontak' => 'fatimah.zahra@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_lengkap' => 'Siti Aisyah',
                'kontak' => 'siti.aisyah@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more entries as needed
        ]);
    }
}
