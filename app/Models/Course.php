<?php

namespace App\Models;

use App\Models\User;
use App\Models\Lesson;
use App\Models\TypeCourse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'duration', 'level', 'instructor_id','type_course_id','price',
    ];

    public function typeCours()
    {
        return $this->belongsTo(TypeCourse::class);
    }
    // Relation avec l'utilisateur qui a publié le cours
    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    // Relation avec les leçons du cours
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    // Relation avec les utilisateurs inscrits au cours
    public function enrolledUsers()
    {
        return $this->belongsToMany(User::class, 'course_enrollments', 'course_id', 'user_id')
            ->withPivot('status')
            ->withTimestamps();
    }
}
