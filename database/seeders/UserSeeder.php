<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name" => "Andi Suhadi",
                "username" => "Andi",
                "password" => Hash::make("12345"),
                "no_telp" => "081237321",
                "alamat" => "Jl Gambir No 3",
                "jabatan_id" => 1
            ],
            [
                "name" => "Kevin Sanjaya",
                "username" => "Kevin",
                "password" => Hash::make("12345"),
                "no_telp" => "081237321",
                "alamat" => "Jl Gambir No 3",
                "jabatan_id" => 2
            ],
            [
                "name" => "Gilang Akbar",
                "username" => "Gilang",
                "password" => Hash::make("12345"),
                "no_telp" => "081237321",
                "alamat" => "Jl Gambir No 3",
                "jabatan_id" => 1
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
