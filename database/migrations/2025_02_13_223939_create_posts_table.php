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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',500);
            $table->string('slug',500);
            $table->text('description')->nullabe();
            $table->text('content')->nullabe();
            $table->string('image')->nullabe();
            $table->enum('posted',['yes','not'])->default('not');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
