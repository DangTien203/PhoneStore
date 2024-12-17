<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    private $table = 'phones';
    private $fillable = ['id', 'name', 'category_id', 'quantity'];
}
