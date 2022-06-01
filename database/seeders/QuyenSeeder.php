<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('quyens')->insert([
           'id' => 1,
           'TenQuyen' => 'Admin'  
        ]);
        \DB::table('quyens')->insert([
           'id' => 2,
           'TenQuyen' => 'NhanVien'  
        ]);

       
    }
}