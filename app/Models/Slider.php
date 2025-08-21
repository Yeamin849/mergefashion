<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_url',
        'target_url',
    ];

    protected $table = "sliders";
    protected $primaryKey = "id";
}
