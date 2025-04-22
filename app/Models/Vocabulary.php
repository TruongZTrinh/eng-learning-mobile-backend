<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    use HasFactory;
    protected $fillable = [
        'vocabulary_quiz_topic_id',
        'word',
        'meaning',
        'example',
        'image_path',
        'level',
    ];

    public function vocabularyQuizTopic()
    {
        return $this->belongsTo(VocabularyQuizTopic::class, 'vocabulary_quiz_topic_id');
    }
}
