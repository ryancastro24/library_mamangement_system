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
        Schema::create('books', function (Blueprint $table) {
            $table->id("book_id");
            $table->string("title")->unique();
            $table->string("author");
            $table->integer("year_published");  
            $table->integer("number_of_pages");
            $table->string("description");
            $table->string("image");
            $table->integer("one_star")->default(0);
            $table->integer("two_star")->default(0);
            $table->integer("three_star")->default(0);
            $table->integer("four_star")->default(0);
            $table->integer("five_star")->default(0);
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
