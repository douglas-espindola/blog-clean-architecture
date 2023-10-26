<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
