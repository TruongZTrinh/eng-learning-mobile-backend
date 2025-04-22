<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['title', 'description', 'level', 'user_type'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
