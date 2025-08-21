<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'pro_id',
        'pro_cat',
        'pro_cover',
        'pro_name',
        'pro_images',
        'content',
        'discount',
        'r_price',
        'c_price',
    ];

    protected $table = "products";
    protected $primaryKey = "id";
}
