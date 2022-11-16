<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'img_url', 'slug', 'name', 'description', 'price', 'stock'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
