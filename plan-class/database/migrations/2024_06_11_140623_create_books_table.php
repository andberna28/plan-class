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
        Schema::create('books', function (Blueprint $table){
            $table->id();
            $table->string('author');
            $table->string('title');
            $table->string('subtitle');
            $table->integer('edition');
            $table->string('publishing_company');
            $table->year('year_of_publication');
            $table->string('book_cover');
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
