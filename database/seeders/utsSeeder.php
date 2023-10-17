<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class utsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('program_studis')->insert([
            ['nama'=>'Sistem Informasi',
            'deskripsi'=>'Sistem Informasi adalah salah satu jurusan di bidang ilmu komputer yang fokus pada pengembangan dan penerapan teknologi informasi dalam konteks bisnis dan organisasi.'],
            ['nama'=>'Hukum',
            'deskripsi'=>'Ilmu Hukum adalah salah satu jurusan di perguruan tinggi yang mempelajari tentang hukum, baik hukum nasional maupun internasional'],
            ['nama'=>'Perhotelan',
            'deskripsi'=>'Perhotelan adalah bidang ilmu yang berhubungan dengan manajemen hotel dan mengeksplorasi cara untuk menyeimbangkan aspek pariwisata dan manajemen bisnis untuk sukses.'],
            ['nama'=>'Ekonomi',
            'deskripsi'=>'Ilmu ekonomi mempelajari bagaimana masyarakat mengambil, mengelola dan mengalokasikan sumber daya yang terbatas.'],
            ['nama'=>'Arsitektur',
            'deskripsi'=>'Arsitektur merupakan ilmu dan seni dalam mendesain dan merancang bangunan dan struktur'],
        ]
        );

        \DB::table('pembayarans')->insert([
            ['studentID'=>'03081210016',
            'amount'=> 750000.00,
            'paymentDate'=>'2023-10-17',
            'paymentMethod'=>'Cash'],
            ['studentID'=>'03081210027',
            'amount'=>810000.00,
            'paymentDate'=>'2023-10-16',
            'paymentMethod'=>'Debit'],
            ['studentID'=>'03081210038',
            'amount'=>765000.00,
            'paymentDate'=>'2023-09-15',
            'paymentMethod'=>'Kredit'],
            ['studentID'=>'03081210049',
            'amount'=>550000.00,
            'paymentDate'=>'2023-09-04',
            'paymentMethod'=>'Cash'],
            ['studentID'=>'03081210070',
            'amount'=>375000.00,
            'paymentDate'=>'2023-09-20',
            'paymentMethod'=>'Debit'],
        ]
        );

        \DB::table('transkrip_akademiks')->insert([
            ['studentID'=>'03081210016',
            'kodeMatakuliah'=>'SI001',
            'kodeTerm'=>'TM001',
            'nilai'=>'A',
            'sks'=>4,
            'gpa'=>4.0],
            ['studentID'=>'03081210027',
            'kodeMatakuliah'=>'SI002',
            'kodeTerm'=>'TM002',
            'nilai'=>'B+',
            'sks'=>3,
            'gpa'=>3.5],
            ['studentID'=>'03081210038',
            'kodeMatakuliah'=>'SI003',
            'kodeTerm'=>'TM003',
            'nilai'=>'B+',
            'sks'=>6,
            'gpa'=>3.6],
            ['studentID'=>'03081210049',
            'kodeMatakuliah'=>'SI004',
            'kodeTerm'=>'TM004',
            'nilai'=>'B',
            'sks'=>3,
            'gpa'=>3.0],
            ['studentID'=>'03081210070',
            'kodeMatakuliah'=>'SI005',
            'kodeTerm'=>'TM005',
            'nilai'=>'B-',
            'sks'=>4,
            'gpa'=>2.8],
        ]
        );

        $faker = Faker::create('id_ID'); //kalo mau pake data ingris tinggal ganti jdi en
 
    	for($i = 1; $i <= 15; $i++){
 
    	    // insert data ke table pegawai menggunakan Faker
    		\DB::table('users')->insert([
                'name'=> $faker->name,
    			'email' => $faker->email,
                'password' => $faker->password,
    		]);
        }
    }
}
