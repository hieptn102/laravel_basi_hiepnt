<?php

namespace Database\Seeders;

use App\Models\items;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        items::create([
            'name' => Str::random(10),
            'amount' => '1',
            'category_id' => '1',
        ]);

    }
}
