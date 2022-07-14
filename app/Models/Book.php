<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
    'book_id',
    'name',
    'author_id',
    'publication_id',
    'ISBN_code',
    'publication_year',
    'edition',
    'info_1',
    'info_2',
    'image_1',
    'image_2',
    'authors_name',
    'categories_name',
    'seller_id',
    'price',
    'discount_price',
    'discount_percent',
    'old_or_new',
    'binding',
    'current_stock',
    'total_stock',
    'info_1',
    'info_2',
    ];
}
