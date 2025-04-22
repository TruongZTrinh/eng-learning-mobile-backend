<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VocabularyQuizTopic extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image_path',
    ];

    public function vocabularies()
    {
        return $this->hasMany(Vocabulary::class, 'vocabulary_quiz_topic_id');
    }
}
