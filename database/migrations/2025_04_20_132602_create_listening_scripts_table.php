<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('listening_scripts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listening_quiz_id')
                ->constrained('listening_quizzes')
                ->onDelete('cascade');
            $table->string('speaker');
            $table->text('script');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listening_scripts');
    }
};
