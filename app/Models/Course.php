<?php
// Milad Amini - Q01018070
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Course extends Model
{
    protected $fillable = [
        'user_id',
        'course_code',
        'course_name',
        'credit_hours',
        'semester',
    ];
}
