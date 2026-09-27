<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'team',
        'category',
        'price',
        'size',
        'stock',
        'image',
        'description',
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}