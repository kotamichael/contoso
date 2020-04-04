<?php

use Illuminate\Database\Seeder;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_types')->insert([
            'name' => 'Savings',
            'interest' => 1.05,
        ]);
        DB::table('account_types')->insert([
            'name' => 'Checking',
            'interest' => 1.04,
        ]);
        DB::table('account_types')->insert([
            'name' => 'High Yield',
            'interest' => 1.07,
        ]);
    }
}
