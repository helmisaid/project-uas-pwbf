<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosen')->insert(
            array(
                ['nama' => 'Ahmad Fauzi', 'nip' => '21726188922', 'alamat' => 'Jl. Perumtas III, Surabaya'],
                ['nama' => 'Haris Sanjaua', 'nip' => '21726188927', 'alamat' => 'Jl. Genteng Sidomukti, Surabaya'],
                ['nama' => 'Ahmad Danang', 'nip' => '21726188934', 'alamat' => 'Jl. Mayjen Sungkono, Surabaya'],
            )
        );
    }
}
