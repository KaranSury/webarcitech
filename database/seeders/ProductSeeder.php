<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            ['name'=>'iphone', 'detail'=>'high Quailaty and camera 200 pixel', 'image'=>'iphone.jpg'],
            ['name'=>'samsung', 'detail'=>'old version', 'image'=>'samsung.jpg'],
            ['name'=>'jio', 'detail'=>'good to use', 'image'=>'jio.jpg'],
            ['name'=>'nokia', 'detail'=>'ram version 2gb', 'image'=>'nokia.jpg'],
                    ];
                    \DB::table('products')->insert($user);
    }
}
