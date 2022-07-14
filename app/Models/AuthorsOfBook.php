<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorsOfBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'authors_id'
    ];
}
