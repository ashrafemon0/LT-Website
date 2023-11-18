<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampusInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'info_icon',
        'info_title',
        'info_des'

    ];
}
