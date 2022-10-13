<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jabatan;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = [
            [
                "nama" => "Bos",
                "golongan" => "A"
            ],
            [
                "nama" => "Manager",
                "golongan" => "B"
            ],
            [
                "nama" => "Sekertaris",
                "golongan" => "C"
            ],
        ];

        foreach ($jabatan as $j) {
            Jabatan::create($j);
        }
    }
}
