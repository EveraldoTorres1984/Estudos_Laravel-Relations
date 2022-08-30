<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreatedUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            "name" => "Everaldo Torres",
            "email" => "eve@hotmail.com",
            "password" => Hash::make("123"),
        ]);

        DB::table('addresses')->insert([
            "address" => "Av. Zero, N 1000"
            
        ]);
    }
}
