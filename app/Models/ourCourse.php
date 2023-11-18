<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ourCourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name', 'course_des', 'course_enroll', 'course_review', 'course_price', 'teacher_img'
    ];
}
