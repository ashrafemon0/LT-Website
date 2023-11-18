<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_img',
        'blog_title',
        'blog_author',
        'blog_react',
        'blog_comment',

    ];
}
