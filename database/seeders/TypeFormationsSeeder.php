<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeFormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeFormations')->insert([
            [
                "name" => "js",
            ],
            [
                "name" => "html",
            ],
            [
                "name" => "css",
            ],
            [
                "name" => "laravel",
            ],
            [
                "name" => "latyf",
            ],
            [
                "name" => "js",
            ],
            [
                "name" => "evzev",
            ],
            [
                "name" => "egvzqs",
            ],
            [
                "name" => "jevz",
            ],
        ]);
    }
}
