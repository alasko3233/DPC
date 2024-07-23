<?php

namespace App\Models;

use App\Models\Course;
use App\Models\ExamResult;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'course_id', 'duration_minutes', 'passing_score',
    ];

    // Relation avec le cours pour lequel l'examen est créé
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // Relation avec les résultats des étudiants pour cet examen
    public function results()
    {
        return $this->hasMany(ExamResult::class);
    }
}
