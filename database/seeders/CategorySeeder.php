<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Poleras',
                'slug' => Str::slug('Moda'),
                'icon' => '*'
            ],
            [
                'name' => 'Accesorios',
                'slug' => Str::slug('Accesorios'),
                'icon' => '*'
            ],

            [
                'name' => 'Pantalones',
                'slug' => Str::slug('Consola y video juegos'),
                'icon' => '*'
            ],

            [
                'name' => 'Zapatillas',
                'slug' => Str::slug('Belleza'),
                'icon' => '*'
            ],

            [
                'name' => 'Shorts',
                'slug' => Str::slug('Libreria'),
                'icon' => '*'
            ],
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }
        }
    }
}
