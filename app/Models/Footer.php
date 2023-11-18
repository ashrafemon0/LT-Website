<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = [
        'footer_logo',
        'footer_des',
        'footer_address',
        'footer_phone',
        'footer_email',

    ];
}
