<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                "name" => "js",
                "description" => "cours de js",
            ],
            [
                "name" => "html",
                "description" => "cours de html",
            ],
            [
                "name" => "css",
                "description" => "cours de css",
            ],
            [
                "name" => "laravel",
                "description" => "cours de laravel",
            ],
            [
                "name" => "latyf",
                "description" => "tbr",
            ],
            [
                "name" => "js",
                "description" => "rebftr",
            ],
        ]);
    }
}
