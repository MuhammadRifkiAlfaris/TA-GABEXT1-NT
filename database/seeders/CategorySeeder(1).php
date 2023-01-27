<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $item = [
        	['name' => 'Cair','description'=>'This is description for Cair'],
        	['name' => 'Bubuk','description'=>'This is description for Bubuk'],
        	['name' => 'Pil','description'=>'This is description for Pil'],

        ];

        foreach ($item as $item) {
        	Category::create($item);
        }
    }
}
