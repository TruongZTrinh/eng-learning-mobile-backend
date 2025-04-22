<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('listening_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listening_quiz_id')
                ->constrained('listening_quizzes')
                ->onDelete('cascade');
            $table->foreignId('listening_script_id')
                ->constrained('listening_scripts')
                ->onDelete('cascade');
            $table->text('question_text');
            $table->string('correct_answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listening_questions');
    }
};
