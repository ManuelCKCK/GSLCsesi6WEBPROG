<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class userinfo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registeruser')->insert([
            'Username' => "Aether",
            'Email' => "genshin@impact.com",
            'Gender' => "Male",
            'Age' => 18

        ]);
    }
}
