<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company')->insert([
            'c_name' => 'TCS',
            'website' => 'www.tcs.com',
            'type' => 'IT',
            'status' => 'Active',
            'phone' => '1234567891',
            'address' => 'India',
        ]);
    }
}
