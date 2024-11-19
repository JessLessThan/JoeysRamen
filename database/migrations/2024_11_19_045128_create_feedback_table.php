<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('feedback', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->string('user_name'); // Store the user's name
        $table->integer('rating'); // For the star rating
        $table->text('feedback'); // For the feedback text
        $table->string('location'); // Store the user's name
        $table->timestamps();
    
        // Foreign key constraint
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
    
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
