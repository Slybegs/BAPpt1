<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class matakuliahSullySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('matakuliah_sullies')->insert([
            ['kodeMatakuliah'=>'MK001', 
            'namaMatakuliah'=>'Pemrograman Aplikasi Bisnis',
            'sks'=>4],
            ['kodeMatakuliah'=>'MK002', 
            'namaMatakuliah'=>'Audit SI',
            'sks'=>4],
            ['kodeMatakuliah'=>'MK003', 
            'namaMatakuliah'=>'Sistem Informasi Perusahaan',
            'sks'=>4],
        ]
        );
    }
}
