<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'content', 'course_id', 'order',
    ];

    // cours appartient leçon
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
