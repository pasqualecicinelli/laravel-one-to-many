<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_parts = [
            "front-end",
            "back-end",
            "full-stack"
        ];

        //  $_types=" ";

        foreach ($_parts as $_part) {
            $type = new Type();
            $type->developed_part = $_part;
            $type->save();
        }
    }
}