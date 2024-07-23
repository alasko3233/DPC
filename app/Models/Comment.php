<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'content', 'user_id', 'course_id', 'lesson_id',
    ];

    // Relation avec l'utilisateur qui a laissé le commentaire
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le cours sur lequel le commentaire a été laissé
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // Relation avec la leçon sur laquelle le commentaire a été laissé
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
