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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('author_id');
            $table->foreign('author_id')->references('id')->on('authors');
            $table->string('title')->unique();
            $table->string('description', 500);
            $table->text('summary')->nullable();
            $table->float('price', 8, 2);
            $table->integer('number_pages');
            $table->string('isbn');
            $table->dateTime('launch')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
