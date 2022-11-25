<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::transaction(function(){
            DB::table('accounts')->insert([
                [
                    'mail' => 'aaaaa@ecc.ac.jp',
                    'name' => 'abc 太郎',
                    'pass' => \Hash::make('123456'),
                ],
                [
                    'mail' => 'bbbbb@ecc.ac.jp',
                    'name' => '熊田 金太郎',
                    'pass' => \Hash::make('000000')
                ]
            ]);
        });
    }
}
