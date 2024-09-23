<?php

namespace Database\Seeders;

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
        $user =[
            'name'=> 'rizal',
            'email'=> 'rizal@gmail.com',
            'password' => \bcrypt('rizal12'),
            'kategori_id'=>2,
        ];
        User::insert($user);
    }

    
}


