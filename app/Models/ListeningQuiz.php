<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListeningQuiz extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    // Relationship: A quiz has many scripts
    public function scripts()
    {
        return $this->hasMany(ListeningScript::class);
    }

    // Relationship: A quiz has many questions
    public function questions()
    {
        return $this->hasMany(ListeningQuestion::class);
    }
}
