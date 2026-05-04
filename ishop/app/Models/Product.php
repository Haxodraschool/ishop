<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['img', 'name', 'slug', 'desc', 'price', 'categories_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'products_id');
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class, 'products_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'products_id');
    }
}
