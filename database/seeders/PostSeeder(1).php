<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $items= [
            ['category_id'=>1,'title'=> 'Title 1','description'=>'This is description for Title 1', 'image'=>'img1.jpg'],
            ['category_id'=>2,'title'=> 'Title 2','description'=>'This is description for Title 1', 'image'=>'img2.jpg'],
            ['category_id'=>3,'title'=> 'Title 3','description'=>'This is description for Title 1', 'image'=>'img3.jpg'],
            ['category_id'=>1,'title'=> 'Title 4','description'=>'This is description for Title 1', 'image'=>'img4.jpg'],
            ['category_id'=>2,'title'=> 'Title 5','description'=>'This is description for Title 1', 'image'=>'img5.jpg'],
            ['category_id'=>3,'title'=> 'Title 6','description'=>'This is description for Title 1', 'image'=>'img6.jpg'],
            ['category_id'=>1,'title'=> 'Title 7','description'=>'This is description for Title 1', 'image'=>'img7.jpg'],
            ['category_id'=>2,'title'=> 'Title 7','description'=>'This is description for Title 1', 'image'=>'img8.jpg'],
            ['category_id'=>3,'title'=> 'Title 1','description'=>'This is description for Title 1', 'image'=>'img9.jpg'],
            ['category_id'=>1,'title'=> 'Title 1','description'=>'This is description for Title 1', 'image'=>'img10.jpg'],
            ['category_id'=>2,'title'=> 'Title 1','description'=>'This is description for Title 1', 'image'=>'img11.jpg'],
            ['category_id'=>3,'title'=> 'Title 1','description'=>'This is description for Title 1', 'image'=>'img12.jpg'],
            ['category_id'=>1,'title'=> 'Title 1','description'=>'This is description for Title 1', 'image'=>'img13.jpg'],
            ['category_id'=>2,'title'=> 'Title 1','description'=>'This is description for Title 1', 'image'=>'img14.jpg'],
            ['category_id'=>3,'title'=> 'Title 1','description'=>'This is description for Title 1', 'image'=>'img15.jpg'],
        ];
        foreach ($items as $item) {
            Post::create($item);
        }
    }
}
