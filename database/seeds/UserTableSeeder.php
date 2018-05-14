<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        $user = [
          [
            'name' => 'Matt Packer',
            'email' => 'matt.packer@example.com',
            'password' => Hash::make('password')
          ]
        ];
        DB::table('users')->insert($user);
    }
}
