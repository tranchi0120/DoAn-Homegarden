<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            ['id' => 1,
            'name' => 'TranChi',
            'sdt' => '0339599523',
            'email' => 'tranchi20012000@gmail.com',
            'password' => bcrypt('123456789'),
            'Quyen_ID'=> 1],
        ]);
        
    }
}