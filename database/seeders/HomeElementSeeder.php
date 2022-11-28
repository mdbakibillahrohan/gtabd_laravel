<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homeelements')->insert([
            [
                "identity" => "hero-section",
                "is_show" => 1
            ],
            [
                "identity" => "icon-section",
                "is_show" => 1
            ],
            [
                "identity" => "lightening-deals",
                "is_show" => 1
            ],
            [
                "identity" => "packages",
                "is_show" => 1
            ],
            [
                "identity" => "cheapest-flight",
                "is_show" => 1
            ],

        ]);
    }
}
