<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataPelanggan;

class DataPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'tahun'         => '2019',
                'januari'       => 83116,
                'februari'      => 85163,
                'maret'         => 87210,
                'april'         => 89257,
                'mei'           => 91441,
                'juni'          => 93626,
                'juli'          => 95673,
                'agustus'       => 97680,
                'september'     => 100281,
                'oktober'       => 103030,
                'november'      => 105565,
                'desember'      => 106734,
            ],
            [
                'tahun'         => '2020',
                'januari'       => 83116,
                'februari'      => 85163,
                'maret'         => 87210,
                'april'         => 89257,
                'mei'           => 91441,
                'juni'          => 93626,
                'juli'          => 95673,
                'agustus'       => 97680,
                'september'     => 100281,
                'oktober'       => 103030,
                'november'      => 105565,
                'desember'      => 106734,
            ],
        ];
        foreach ($data as $insertData) {
            DataPelanggan::create($insertData);
        }
    }
}
