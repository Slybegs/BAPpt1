<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('matakuliahs')->insert([
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

        \DB::table('khs')->insert([
            ['kodeKhs'=>'KHS001', 
            'keterangan'=>'2021/2023',
            'keteranganSingkat'=>'2021/2023'],
            ['kodeKhs'=>'KHS002', 
            'keterangan'=>'2022/2024',
            'keteranganSingkat'=>'2022/2025'],
            ['kodeKhs'=>'KHS003', 
            'keterangan'=>'2023/2026',
            'keteranganSingkat'=>'2023/2026'],
        ]
        );

        \DB::table('khs_details')->insert([
            ['kodeKhsDetail'=>'KHS001', 
            'kodeKhs'=>'KHS001',
            'nilai'=>95],
            ['kodeKhsDetail'=>'KHS002', 
            'kodeKhs'=>'KHS002',
            'nilai'=>98],
            ['kodeKhsDetail'=>'KHS003', 
            'kodeKhs'=>'KHS003',
            'nilai'=>100],
        ]
        );

        $faker = Faker::create('id_ID'); //kalo mau pake data ingris tinggal ganti jdi en
 
    	for($i = 1; $i <= 50; $i++){
 
    	    // insert data ke table pegawai menggunakan Faker
    		\DB::table('mahasiswas')->insert([
                'studentID'=> '03000811'&$i,
    			'name' => $faker->name,
                'jurusan' => $faker->address,
    			'tahunMasuk' => '2021',
    		]);
        }
    }
}
