<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['lesson_id', 'question_text'];

    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }
}
