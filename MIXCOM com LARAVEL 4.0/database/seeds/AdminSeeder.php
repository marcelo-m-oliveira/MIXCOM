<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([

            'name' => 'MIXCOM',
            'email' => 'mixcom@gmail.com',
            'password' => Hash::make('mixcom12345'),
        ]);
    }
}
