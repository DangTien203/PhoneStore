<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['id', 'customer_id', 'phone_id', 'order_date', 'quantity', 'total_price'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function phone()
    {
        return $this->belongsTo(Phone::class, 'phone_id', 'id');
    }
}
