<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('admin')->insert([
            'username'=>'admin',
            'password'=>Hash::make('123456')
        ]);
    }
}
