<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use Buihuycuong\Vnfaker\VNFaker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        categories::create([
            'name' => VNFaker::fullname(3),
            'description' => Str::random(10),
        ]);
    }
}
