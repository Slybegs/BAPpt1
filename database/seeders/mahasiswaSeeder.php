<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID'); //kalo mau pake data ingris tinggal ganti jdi en
 
    	for($i = 1; $i <= 50; $i++){
 
    	    // insert data ke table pegawai menggunakan Faker
    		\DB::table('mahasiswa2s')->insert([
                'studentID'=> '03000811'&$i,
    			'nama' => $faker->name,
                'jurusan' => $faker->address,
    			'tahunMasuk' => '2021',
    		]);
        }
    }
}
