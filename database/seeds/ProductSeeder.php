<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Oppo12',
                'price'=>'50000',
                'category'=>'mobile',
                'description'=>'A smart phone with 4 gb ram and much more features',
                'gallery'=>'C:\Users\lenovo\Pictures\Saved Pictures\oppo.jpg'
            ],
            [
                'name'=>'Oppo13',
                'price'=>'50000',
                'category'=>'mobile',
                'description'=>'A smart phone with 4 gb ram and much more features',
                'gallery'=>'C:\Users\lenovo\Pictures\Saved Pictures\oppo.jpg'
            ],
            [
                'name'=>'Oppo14',
                'price'=>'50000',
                'category'=>'mobile',
                'description'=>'A smart phone with 4 gb ram and much more features',
                'gallery'=>'C:\Users\lenovo\Pictures\Saved Pictures\oppo.jpg'
            ],
            [
                'name'=>'Oppo15',
                'price'=>'50000',
                'category'=>'mobile',
                'description'=>'A smart phone with 4 gb ram and much more features',
                'gallery'=>'C:\Users\lenovo\Pictures\Saved Pictures\oppo.jpg'
            ]
        ]);
    }
}
