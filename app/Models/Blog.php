<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_id',
        'title',
        'img_link',
        'content',
        'keyword',
        'date',
    ];

    protected $table = "blogs";
    protected $primaryKey = "id";
}
