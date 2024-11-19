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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('order_quantity');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_location');
            $table->decimal('order_total_price', 8, 2);
            $table->string('order_photo');
            $table->string('order_name');
            $table->string('order_type');
            $table->date('order_date');
            $table->time('order_time');
            $table->string('form_location');
            $table->string('form_detailed_location')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Adds user_id as a foreign key
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
