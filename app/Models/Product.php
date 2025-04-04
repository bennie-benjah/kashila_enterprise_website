<?php

// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'price',
        'stock',
        'description',
        'image',
    ];

    // Define the relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

