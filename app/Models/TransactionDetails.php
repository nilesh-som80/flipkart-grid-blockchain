<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'bill_number',
        'user_id',
        'amount',
        'address_id',
    ];
}
