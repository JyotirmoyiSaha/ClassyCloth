<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
         
            'name'=>'admin',
            'email'=>'jyoti@gmail.com',
            'password'=>bcrypt('1234'),
    
          ]);
    }
}
