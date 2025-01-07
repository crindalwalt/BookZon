<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Fiction',
            'slug'=> 'fiction',
            'icon'=> 'https://images.pexels.com/photos/30051151/pexels-photo-30051151/free-photo-of-alice-in-wonderland-mad-hatter-cosplay-character.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        ]);
        Category::factory()->create([
            'name' => 'Science',
            'slug'=> 'science',
            'icon'=> 'https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg?auto=compress&cs=tinysrgb&w=600',
        ]);
        Category::factory()->create([
            'name' => 'Family',
            'slug'=> 'family',
            'icon'=> 'https://images.pexels.com/photos/4259140/pexels-photo-4259140.jpeg?auto=compress&cs=tinysrgb&w=600',
        ]);
        Category::factory()->create([
            'name' => 'Sports',
            'slug'=> 'sports',
            'icon'=> 'https://images.pexels.com/photos/1618200/pexels-photo-1618200.jpeg?auto=compress&cs=tinysrgb&w=600',
        ]);
    }
}
