<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrustedClient extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_link',
        'target_link',
    ];

    protected $table = "trusted_clients";
    protected $primaryKey = "id";
}
