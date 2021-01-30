<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            [   'nama_mahasiswa' => 'Ashri Azizah Yolandita',
        ],
            [   'alamat' => 'Indramayu',
        ],
            [   'no_tlp' => '08962636736',
        ],
            [   'email' => 'yolandita@gmail.com',
        ],
        ]);
    }
}
