<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeCourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];

    public function cours()
    {
        return $this->hasMany(Course::class);
    }
}
