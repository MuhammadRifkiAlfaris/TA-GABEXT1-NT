<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$items = [
        ['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('admin')],
        ['name' => 'Member', 'email' => 'member@gmail.com', 'password' => Hash::make('member')],
        
    ];
    

    foreach ($items as $item) {
    	User::create($item);
    }
    }
}
