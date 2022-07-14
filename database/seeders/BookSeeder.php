<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5000 ; $i++) {
            Book::create([
                'name' => Str::random(20),
                'book_id' =>Str::random(20),
        'publication_id'=>Str::random(20),
        'ISBN_code'=>Str::random(20),
        'publication_year'=>Str::random(20),
        'edition'=>Str::random(20),
        // 'image_1'=>Str::random(20),
        // 'image_2'=>Str::random(20),
        'authors_name'=>Str::random(20),
        'categories_name'=>Str::random(20),
        'seller_id'=>Str::random(20),
        'price'=>rand(10, 100),
        'discount_price'=>rand(10, 100),
        'discount_percent'=>rand(10, 100),
        'old_or_new'=>Str::random(3),
        'binding'=>Str::random(5),
        'current_stock'=>rand(10, 100),
        'total_stock'=>rand(10, 100),
            ]);
        }

    }
}
