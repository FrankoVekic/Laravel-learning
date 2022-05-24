<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::factory()->create([
            'name'=>'John Doe',
            'email'=>'john@gmail.com'
        ]);

    //     \App\Models\User::factory(10)->create();
         \App\Models\Product::factory(10)->create([
             'user_id'=> $user->id
         ]);
    }
}
