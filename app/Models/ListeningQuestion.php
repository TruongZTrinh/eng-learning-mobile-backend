<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListeningQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['listening_quiz_id', 'listening_script_id', 'question_text', 'correct_answer'];

    // Relationship: A question belongs to a quiz
    public function quiz()
    {
        return $this->belongsTo(ListeningQuiz::class);
    }

    // Relationship: A question belongs to a script
    public function script()
    {
        return $this->belongsTo(ListeningScript::class);
    }

    // Relationship: A question has many options
    public function options()
    {
        return $this->hasMany(ListeningOption::class);
    }
}
