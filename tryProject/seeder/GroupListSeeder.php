<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupListSeeder extends Seeder
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
        DB::table('group_lists')->insert([
            [
                'groupname'=> 'ecc',
            ],
            [
                'groupname' => 'school',
            ]
        ]);
    });
    }
}
