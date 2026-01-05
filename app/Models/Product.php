<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'type',
        'price',
        'stock',
        'image',
        'is_active',
    ];

    /**
 * Product wishlisted by users
 */
public function wishlists()
{
    return $this->hasMany(\App\Models\Wishlist::class);
}

}
