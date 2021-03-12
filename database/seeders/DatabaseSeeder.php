<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Categorypost;
use App\Models\Store;
use App\Models\Subcategory;
use App\Models\Tag;
use App\Models\Product;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');

        $this->call(UserSeeder::class);
        Categorypost::factory(5)->create();
        Tag::factory(8)->create();
        $this->call(PostSeeder::class);
        Store::factory(50)->create();
        Category::factory(10)->create();
        Subcategory::factory(30)->create();
        Product::factory(100)->create();
    }
}
