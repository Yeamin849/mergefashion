<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellsHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tran_id',
        'pro_id',
        'pro_name',
        'pro_cover',
        'size',
        'quantity',
        'r_price',
        'c_price',
        'total_price',
        'client_name',
        'c_email',
        'c_mobile',
        'c_address',
        'c_upazila',
        'c_zila',
        'c_division',
    ];

    protected $table = "sells_histories";
    protected $primaryKey = "id";
}
