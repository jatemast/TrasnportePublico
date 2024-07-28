<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([    
            'name' => 'Javier Teheran Magallanez',
            'email' => 'javierteheran19@gmail.com',
            'password' => bcrypt('1002194617'),
        ]);
    }
}
