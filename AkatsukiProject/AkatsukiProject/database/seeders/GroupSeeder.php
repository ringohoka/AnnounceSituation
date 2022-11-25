<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function(){
            DB::table('groups')->insert([
                [
                    'id' => 1,
                    'accounts_id'=> 1,
                    'groupid'=> 124,
                ],
                [
                    'id' => 2,
                    'accounts_id'=> 2,
                    'groupid' => 125,
                ]
            ]);
        });
    }
}
