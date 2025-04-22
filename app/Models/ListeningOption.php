<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListeningOption extends Model
{
    use HasFactory;

    protected $fillable = ['listening_question_id', 'text'];

    // Relationship: An option belongs to a question
    public function question()
    {
        return $this->belongsTo(ListeningQuestion::class);
    }
}
