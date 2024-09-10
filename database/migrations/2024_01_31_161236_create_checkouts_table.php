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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id'); // The ID of the seller (user who posted the book)
            $table->unsignedBigInteger('user_id'); // The ID of the buyer (user who is making the purchase)
            $table->unsignedBigInteger('book_id'); // The ID of the book being purchased (post)
            $table->string('phone_number');
            $table->string('fname');
            $table->string('lname');
            $table->string('address');
            $table->string('state');
            $table->string('pincode');
            
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('seller_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('book_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
