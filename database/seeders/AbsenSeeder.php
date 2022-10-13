<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Absen;

class AbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $absen = [
            [
                "user_id" => 1,
                "check_in" => date("Y-m-d H:i:s" ,mktime(8, 14, 54, 8, 12, 2022)),
                "check_out" => date("Y-m-d H:i:s" ,mktime(17, 14, 54, 8, 12, 2022)),
            ],
            [
                "user_id" => 2,
                "check_in" => date("Y-m-d H:i:s" ,mktime(8, 14, 54, 8, 12, 2022)),
                "check_out" => date("Y-m-d H:i:s" ,mktime(17, 14, 54, 8, 12, 2022)),
            ],
            [
                "user_id" => 3,
                "check_in" => date("Y-m-d H:i:s" ,mktime(8, 14, 54, 8, 12, 2022)),
                "check_out" => date("Y-m-d H:i:s" ,mktime(17, 14, 54, 8, 12, 2022)),
            ],
            [
                "user_id" => 1,
                "check_in" => date("Y-m-d H:i:s" ,mktime(8, 14, 54, 8, 13, 2022)),
                "check_out" => date("Y-m-d H:i:s" ,mktime(17, 14, 54, 8, 13, 2022)),
            ],
            [
                "user_id" => 2,
                "check_in" => date("Y-m-d H:i:s" ,mktime(8, 14, 54, 8, 13, 2022)),
                "check_out" => date("Y-m-d H:i:s" ,mktime(17, 14, 54, 8, 13, 2022)),
            ],
        ];

        foreach ($absen as $s) {
            Absen::create($s);
        }
    }
}
