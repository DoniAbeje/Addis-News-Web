<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create(['name' => 'Sport']);
        \App\Category::create(['name' => 'Entertainment']);
        \App\Category::create(['name' => 'Politics']);
        \App\Category::create(['name' => 'Business']);
    }
}
