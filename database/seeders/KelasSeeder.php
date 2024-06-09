<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert(
            array(
                ['nama_kelas' => 'A2'],
                ['nama_kelas' => 'A3'],
                ['nama_kelas' => 'T1'],
                ['nama_kelas' => 'T2']
            )
        );
    }
}
