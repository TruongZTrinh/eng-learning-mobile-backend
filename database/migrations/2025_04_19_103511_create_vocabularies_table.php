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
        Schema::create('vocabularies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vocabulary_quiz_topic_id');
            $table->string('word');
            $table->string('meaning');
            $table->string('example');
            $table->string('image_path');
            $table->enum('level', ['easy', 'medium', 'hard']);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('vocabulary_quiz_topic_id')
                ->references('id')
                ->on('vocabulary_quiz_topics')
                ->onDelete('cascade');
        });

        // Define foreign key constraint

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vocabularies');
    }
};
