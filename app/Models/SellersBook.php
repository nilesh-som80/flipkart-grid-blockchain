<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellersBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'seller_id',
        'book_id',
        'price',
        'discount_price',
        'discount_percent',
        'old_or_new',
        'binding',
        'current_stock',
        'total_stock'
    ];

}

