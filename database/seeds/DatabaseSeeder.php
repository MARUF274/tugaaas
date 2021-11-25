<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'MSI PRESTIGE 14 A11SCX-448ID',
            'description' => 'Laptop MSI',
            'photo' => 'https://cf.shopee.co.id/file/670f11ae1a806517218451d3da975449',
            'price' => 698.88
         ]);
 
         DB::table('products')->insert([
             'name' => 'MSI GF63 Thin 11SC',
             'description' => 'Laptop MSI',
             'photo' => 'https://cf.shopee.co.id/file/91eae9eab96ec638c23b15a463de9bb3',
             'price' => 983.00
         ]);
 
         DB::table('products')->insert([
             'name' => 'Asus ROG G713QE',
             'description' => 'Laptop ROG',
             'photo' => 'https://cf.shopee.co.id/file/0564865f79b05575e7b1e3c047732bf1',
             'price' => 675.00
         ]);
 
         DB::table('products')->insert([
             'name' => 'ROG Phone 5',
             'description' => 'HP ROG',
             'photo' => 'https://cf.shopee.co.id/file/0cf1bfa11a92cc7828d4ddc203ebd5a3',
             'price' => 559.99
         ]);
 
         DB::table('products')->insert([
             'name' => 'Alienware M15 R6',
             'description' => 'Laptop ALienware',
             'photo' => 'https://cf.shopee.co.id/file/ab5234029ff8b02183babb40e440defa',
             'price' => 983.00
         ]);
 
         DB::table('products')->insert([
             'name' => 'Lenovo Legion',
             'description' => 'Laptop Lenovo',
             'photo' => 'https://cf.shopee.co.id/file/de0063e1b6a7ca250160237001cceb84',
             'price' => 983.00
         ]);



        //  DB::table('game_products')->insert([
        //     'name' => 'Rust',
        //     'description' => 'Game Rust',
        //     'photo' => 'https://cf.shopee.co.id/file/33e5e63c5674fb743d01a4883afb5c1e',
        //     'price' => 129.99
        // ]);
        // DB::table('game_products')->insert([
        //     'name' => 'Escape From Tarkov',
        //     'description' => 'Tarkov Game',
        //     'photo' => 'https://cf.shopee.co.id/file/240e6139926ac5f1a2e71805b4187ab5',
        //     'price' => 118.99
        // ]);
        // DB::table('game_products')->insert([
        //     'name' => 'Rainbow Six:Siege Deluxe',
        //     'description' => 'R6S',
        //     'photo' => 'https://cf.shopee.co.id/file/f62442b178ba2e2b332ee7189bfa7a9e',
        //     'price' => 129.99
        // ]);
        // DB::table('game_products')->insert([
        //     'name' => 'Spider-Man Miles Morales',
        //     'description' => 'PS5 Spiderman game.',
        //     'photo' => 'https://cf.shopee.co.id/file/77a4cff82bc999d4ce48887c7e7f2705',
        //     'price' => 129.99
        // ]);
        // DB::table('game_products')->insert([
        //     'name' => 'Demon\'s Souls',
        //     'description' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
        //     'photo' => 'https://cf.shopee.co.id/file/f0bbbffb2abd1e1923e3403a078ed43c',
        //     'price' => 78
        // ]);
        // DB::table('game_products')->insert([
        //     'name' => 'Horizon Forbidden West',
        //     'description' => 'Horizon Forbidden West.',
        //     'photo' => 'https://cf.shopee.co.id/file/368990f2c9388731bcc1c336af0a99f2',
        //     'price' => 90
        // ]);



        // DB::table('acc_products')->insert([
        //     'name' => 'Logitech G610',
        //     'description' => 'Keyboard Logitech.',
        //     'photo' => 'https://cf.shopee.co.id/file/f9d227b8e91a6d04689f6fd3eb9ebfbe',
        //     'price' => 79.99
        // ]);
        // DB::table('acc_products')->insert([
        //     'name' => 'Razer Barracuda X',
        //     'description' => 'Headphone Razer.',
        //     'photo' => 'https://cf.shopee.co.id/file/72f872e96f87f4a59ae144844133c36d',
        //     'price' => 129.99
        // ]);
        // DB::table('acc_products')->insert([
        //     'name' => 'Rexus Xierra X16',
        //     'description' => 'Rexus Mouse.',
        //     'photo' => 'https://cf.shopee.co.id/file/fd469a425d3b2a7d5a313d502190a6cc',
        //     'price' => 60
        // ]);
                
    }
}
