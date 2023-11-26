<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Domain\Blogging\Models\Post;
use Domain\Shared\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        if(app()->environment('local')){
//            $this->call(DefaultUserSeeder::class);
//        }
        Post::factory(20)->for(
            User::factory()->create([
                'first_name' => 'Doug',
                'last_name' => 'Brito',
                'email' => 'douglasbrito15@gmail.com'
            ])
        )->create();
    }
}
