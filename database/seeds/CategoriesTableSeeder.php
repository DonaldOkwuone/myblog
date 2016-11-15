<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for($i = 0; $i < 10 ; $i++){
			Category::create(
				[
					 
					'title' => "Category {$i}",
					'description' => " Suspendisse commodo nibh odio, vel elementum nulla luctus sit amet."
					 
				]
			);
		}
    }
}
