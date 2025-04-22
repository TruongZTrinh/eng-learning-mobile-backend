<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListeningScript extends Model
{
    use HasFactory;

    protected $fillable = ['listening_quiz_id', 'speaker', 'transcript'];

    // Relationship: A script belongs to a quiz
    public function quiz()
    {
        return $this->belongsTo(ListeningQuiz::class);
    }
}
