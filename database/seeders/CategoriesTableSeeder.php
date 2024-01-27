<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create([
            'Category_Name' => 'Mountain',
            'description' => 'Bikes designed for off-road trails and rugged terrains.',
        ]);

        Categorie::create([
            'Category_Name' => 'Road',
            'description' => 'Bikes built for speed and efficiency on paved roads.',
        ]);

        Categorie::create([
            'Category_Name' => 'City',
            'description' => 'Bikes suitable for commuting and urban riding.',
        ]);

    }
}
