<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matakuliah')->insert(
            array(
                ['nama_mk' => 'Logika dan Pemrograman'],
                ['nama_mk' => 'Aljabar Linear'],
                ['nama_mk' => 'Matematika Diskrit'],
                ['nama_mk' => 'Matematika Dasar']
            )
        );
    }
}
