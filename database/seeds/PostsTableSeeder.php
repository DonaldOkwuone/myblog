<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10 ; $i++){
			Post::create(
				[
					'category' => $i,
					'title' => "An awesome arsenal blog {$i}",
					'body' => "Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam. Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh odio, vel elementum nulla luctus sit amet.",
					'author' => "author {$i}",
					'image' => "image $i",
					'hits' => "$i",
					'published' => $i
				]
			);
		}
    }
}
