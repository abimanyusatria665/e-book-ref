<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name' => 'Novel'
        ]);
        Category::create([
            'category_name' => 'Literatur'
        ]);
        Category::create([
            'category_name' => 'Komik'
        ]);
        Category::create([
            'category_name' => 'Ensiklopedia'
        ]);
        Category::create([
            'category_name' => 'Biografi'
        ]);
    }
}
