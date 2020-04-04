<?php

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
        DB::table('users')->insert([
            'name' => 'Example User',
            'email' => 'example.@gmail.com',
            'password' => 'secure_example',
        ]);
    }
}
