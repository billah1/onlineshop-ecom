<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $demo_categories = [
            'Computer',
            'Camera',
            'Smart Phones',
            'Watch',
            'Electronic',
            'Tablet',
            'Books',
            'Microchip',
            'Bullhorn'
        ];
        foreach ($demo_categories as $value) {
            Category::create([
                'title' => $value,
                'slug' => Str::slug($value),
            ]);
        }

    }
}
