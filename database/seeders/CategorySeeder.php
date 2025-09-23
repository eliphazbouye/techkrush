<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'PHP',
                'slug' => 'php',
                'description' => 'PHP programming language and development'
            ],
            [
                'name' => 'DevOps',
                'slug' => 'devops',
                'description' => 'DevOps practices, tools, and methodologies'
            ],
            [
                'name' => 'AI',
                'slug' => 'ai',
                'description' => 'Artificial Intelligence and machine learning'
            ]
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}