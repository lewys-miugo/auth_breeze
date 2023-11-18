<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name'=>'Lewys Admin',
                'email'=>'admin@auth.com',
                'role'=>'admin',
                'status'=>'active',
                'password'=>bcrypt('adminpassword')
            ],
            [
                'name'=>'Lewys Vendor',
                'email'=>'vendor@auth.com',
                'role'=>'vendor',
                'status'=>'active',
                'password'=>bcrypt('vendorpassword')
            ],
            [
                'name'=>'Lewys Customer',
                'email'=>'customer@auth.com',
                'role'=>'customer',
                'status'=>'active',
                'password'=>bcrypt('customerpassword')
            ]
        ]);
    }
}
