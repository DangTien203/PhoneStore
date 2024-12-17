<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    private $table = 'orders';
    private $fillable = ['id', 'customer_id', 'phone_id', 'order_date', 'quantity', 'total_price'];
}
