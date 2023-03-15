<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'brand_id',
        'product_desc',
        'product_name',
        'product_content',
        'product_price',
        'product_image',
        'product_status',
    ];
}
