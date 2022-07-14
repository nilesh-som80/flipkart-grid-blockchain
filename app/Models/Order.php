<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
    'order_id',
    'book_id',
    'user_id',
    'address_id',
    'shipment_tracking_id',
    'timestamp_of_purchase',
    'bought',
    'seller_id',
    'selling_price',];
}
