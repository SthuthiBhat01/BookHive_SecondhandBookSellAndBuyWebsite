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
            $table->unsignedBigInteger('user_id');
            $table->string('image')->nullable();
            $table->string('book_title')->nullable();
            $table->string('book_description')->nullable();
            $table->string('author_name')->nullable();
            $table->string('condition')->nullable();
           
            $table->decimal('price', 8, 4);
            $table->string('book_type');
            $table->string('name');
            $table->string('phone_number');
            $table->integer('pincode');
 
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
