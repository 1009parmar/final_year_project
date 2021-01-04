<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            'f_name' => 'Mr. Vallabh',
            'l_name' => 'Patel',
            'email' => 'vgp@gmail.com',
            'join_date' => '2020-12-12',
            'password' => '123',
            'c_password' => '123',
            'm_number' => '1234567890',
            'gender' => 'Male',
            'designation' => 'ASSISTANT PROFESSOR',
            'department' => 'INFORMATION TECHNOLOGY',
            'dob' => '1974-04-12',
            'qualification' => 'M.TECH',
            'experience' => '20 Year',
            'interest' => 'COMPUTER NETWORK',
            'address' => 'Bhavnagar',
            'photo' => '1607323766.jpg',
        ]);
    }
}
