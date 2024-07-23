<?php

namespace App\Models;

use App\Models\Exam;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExamResult extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'exam_id', 'score',
    ];

    // Relation avec l'utilisateur qui a passé l'examen
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec l'examen pour lequel ce résultat est enregistré
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
