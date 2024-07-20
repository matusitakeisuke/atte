<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 6,
            'name'=> 'keisuke',
            'email' => 'hello@world.com',
            'password' => Hash::make('matti1529'),
            'email_verified_at' => null, 
            'remember_token' => null,
        ]);
       
    }
}
