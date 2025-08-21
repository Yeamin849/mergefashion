<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'pro_id',
        'size',
        'quantity',
    ];

    protected $table = "stocks";
    protected $primaryKey = "id";
}
