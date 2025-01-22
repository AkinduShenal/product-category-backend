<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'category_id',
    ];

    // Cast attributes to specific types
    protected $casts = [
        'price' => 'float', // Ensure price is always returned as a float
        'quantity' => 'integer', // Optional: Ensure quantity is an integer
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
