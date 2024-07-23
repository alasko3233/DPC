<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseEnrollment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'course_id', 'status',
    ];

    // Relation avec l'utilisateur inscrit au cours
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le cours auquel l'utilisateur est inscrit
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
