<?php

use App\Catagory;
use Illuminate\Database\Seeder;

class CatagoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catagory::create([
            'name'=> 'laptop'
        ]);
        Catagory::create([
            'name'=> 'mobile'
        ]);
    }
}
