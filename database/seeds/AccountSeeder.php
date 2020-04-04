<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
            $table->integer('user_id')->unsigned();
            $table->integer('amount');
            $table->integer('type_id');
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'user_id' => 1,
            'amount' => 100,
            'type_id' => 1
        ]);
        DB::table('accounts')->insert([
            'user_id' => 1,
            'amount' => 100,
            'type_id' => 2
        ]);
        DB::table('accounts')->insert([
            'user_id' => 1,
            'amount' => 100,
            'type_id' => 3
        ]);
    }
}
