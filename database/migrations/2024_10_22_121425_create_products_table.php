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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // For product name
            $table->decimal('price', 8, 2); // For product price (8 digits, 2 decimal places)
            $table->text('description')->nullable(); // For product description, can be nullable
            $table->integer('quantity'); // For product quantity
            $table->boolean('status')->default(1)->comment('1=available, 0=unavailable'); // For product status (e.g., available/unavailable)
    
            $table->timestamps(); // Created at and updated at
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
