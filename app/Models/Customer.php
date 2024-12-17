<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    private $table = 'customers';
    private $fillable = ['id', 'name', 'address', 'phone_number'];
}
