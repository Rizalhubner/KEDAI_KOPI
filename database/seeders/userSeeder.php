<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $kategori = [
            [
                'nama' => 'admin',
            ],
            [
                'nama' => 'user',
            ]
        ];

        Kategori::insert($kategori);
        $user = [
            [
                'name' => 'rizal',
                'email' => 'rizal@gmail.com',
                'password' => \bcrypt('rizal12'),
                'kategori_id' => 1,
            ],
            [
                'name' => 'reza',
                'email' => 'reza@gmail.com',
                'password' => \bcrypt('RezaReza123'),
                'kategori_id' => 2,
            ]
        ];
        User::insert($user);
    }
}
