<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Buihuycuong\Vnfaker\VNFaker;
use Illuminate\Support\Facades\Hash;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            for($i=0;$i<100;$i++){
                User::create([
                    'mail_address' => VNFaker::email(),
                    'password' => Hash::make('password'),
                    'name' => VNFaker::fullname(3),
                    'address' => VNFaker::city(),
                    'phone' => VNFaker::mobilephone(),
                ]);
            }

    }
}
