<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'designation',
        'fa_link',
        'tw_link',
        'ln_link',

    ];
}
