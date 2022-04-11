<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MhsMatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs_matkul = [
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 1,
                'nilai' => 89,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 2,
                'nilai' => 84,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 3,
                'nilai' => 95,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 4,
                'nilai' => 78,
            ],
            [
                'mahasiswa_id' => 2,
                'matakuliah_id' => 1,
                'nilai' => 76,
            ],
            [
                'mahasiswa_id' => 2,
                'matakuliah_id' => 2,
                'nilai' => 65,
            ],
            [
                'mahasiswa_id' => 2,
                'matakuliah_id' => 3,
                'nilai' => 87,
            ],
            [
                'mahasiswa_id' => 2,
                'matakuliah_id' => 4,
                'nilai' => 86,
            ]
        ];

        DB::table('mahasiswa_matakuliah')->insert($mhs_matkul);       
    }
}
