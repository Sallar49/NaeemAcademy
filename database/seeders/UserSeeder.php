<?php

namespace Database\Seeders;

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
        for($i =1 ; $i <=  20 ; $i++){
            User::create([
                'name'=>'User'.$i,
                'email'=>"user$i@gmail.com",
                "password"=>Hash::make('password'),
                'contact'=>null,
            ]);
        }
    }
}
