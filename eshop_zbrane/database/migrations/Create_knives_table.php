<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('knives', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->float('price');
            $table->string('image')->nullable(); // Sloupec pro obrázek
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('knives');
    }
};