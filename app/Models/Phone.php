<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected  $table = 'phones';
    protected  $fillable = ['id', 'name', 'image_path', 'category_id', 'quantity'];

    // Relationship to Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
