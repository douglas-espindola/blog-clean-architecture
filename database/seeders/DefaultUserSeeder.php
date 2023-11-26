<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Shared\Models\User;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::factory()->create([
           'first_name' => 'Doug',
           'last_name' => 'Brito',
           'email' => 'douglasbrito15@gmail.com'
       ]);
    }
}
