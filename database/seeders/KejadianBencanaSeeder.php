<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class KejadianBencanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Example data to seed
        $data = [
            [
                'id_jeniskejadian' => 1,
                'id_admin' => 1,
                'id_relawan' => 3,
                'tanggal_kejadian' => '2024-06-10',
                'lokasi' => 'Jakarta',
                'update' => Carbon::now(),
                'dukungan_internasional' => 'Ya',
                'keterangan' => 'Detailed description',
                'akses_ke_lokasi' => 'Accessible',
                'kebutuhan' => 'a',
                'giat_pemerintah' => 'Tidak',
                'hambatan' => 'b',
                'id_assessment' => 1,
                'id_dampak' => 1,
                'id_mobilisasi_sd' => 1,
                'id_giat_pmi' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_jeniskejadian' => 1,
                'id_admin' => 1,
                'id_relawan' => 3,
                'tanggal_kejadian' => '2024-05-31',
                'lokasi' => 'Semarang',
                'update' => Carbon::now(),
                'dukungan_internasional' => 'Tidak',
                'keterangan' => 'Detailed description',
                'akses_ke_lokasi' => 'Not Accessible',
                'kebutuhan' => 'a',
                'giat_pemerintah' => 'Ya',
                'hambatan' => 'b',
                'id_assessment' => 2,
                'id_dampak' => 2,
                'id_mobilisasi_sd' => 2,
                'id_giat_pmi' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_jeniskejadian' => 4,
                'id_admin' => 1,
                'id_relawan' => 4,
                'tanggal_kejadian' => '2024-05-23',
                'lokasi' => 'Pasar Kliwon',
                'update' => Carbon::now(),
                'dukungan_internasional' => 'Tidak',
                'keterangan' => 'Kerusakan signifikan terjadi di lokasi ini, memerlukan perhatian segera dari tim penyelamat.',
                'akses_ke_lokasi' => 'Accessible',
                'kebutuhan' => 'b',
                'giat_pemerintah' => 'Tidak',
                'hambatan' => 'c',
                'id_assessment' => 3,
                'id_dampak' => 3,
                'id_mobilisasi_sd' => 3,
                'id_giat_pmi' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_jeniskejadian' => 4,
                'id_admin' => 1,
                'id_relawan' => 4,
                'tanggal_kejadian' => '2024-05-23',
                'lokasi' => 'Pasar Kliwon',
                'update' => Carbon::now(),
                'dukungan_internasional' => 'Tidak',
                'keterangan' => 'Kerusakan signifikan terjadi di lokasi ini, memerlukan perhatian segera dari tim penyelamat.',
                'akses_ke_lokasi' => 'Accessible',
                'kebutuhan' => 'b',
                'giat_pemerintah' => 'Tidak',
                'hambatan' => 'c',
                'id_assessment' => 3,
                'id_dampak' => 4,
                'id_mobilisasi_sd' => 4,
                'id_giat_pmi' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_jeniskejadian' => 4,
                'id_admin' => 1,
                'id_relawan' => 4,
                'tanggal_kejadian' => '2024-05-23',
                'lokasi' => 'Pasar Kliwon',
                'update' => Carbon::now(),
                'dukungan_internasional' => 'Tidak',
                'keterangan' => 'Kerusakan signifikan terjadi di lokasi ini, memerlukan perhatian segera dari tim penyelamat.',
                'akses_ke_lokasi' => 'Accessible',
                'kebutuhan' => 'b',
                'giat_pemerintah' => 'Tidak',
                'hambatan' => 'c',
                'id_assessment' => 3,
                'id_dampak' => 5,
                'id_mobilisasi_sd' => 5,
                'id_giat_pmi' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_jeniskejadian' => 4,
                'id_admin' => 1,
                'id_relawan' => 4,
                'tanggal_kejadian' => '2024-05-23',
                'lokasi' => 'Pasar Kliwon',
                'update' => Carbon::now(),
                'dukungan_internasional' => 'Tidak',
                'keterangan' => 'Kerusakan signifikan terjadi di lokasi ini, memerlukan perhatian segera dari tim penyelamat.',
                'akses_ke_lokasi' => 'Accessible',
                'kebutuhan' => 'b',
                'giat_pemerintah' => 'Tidak',
                'hambatan' => 'c',
                'id_assessment' => 3,
                'id_dampak' => 6,
                'id_mobilisasi_sd' => 6,
                'id_giat_pmi' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            // Add more entries as needed
        ];

        // Insert data into the database
        DB::table('kejadian_bencana')->insert($data);
    }
}
