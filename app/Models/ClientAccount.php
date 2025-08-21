<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'mobile',
        'address',
        'upazila',
        'zila',
        'division',
    ];

    protected $table = "client_accounts";
    protected $primaryKey = "id";
}
