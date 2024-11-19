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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('table_id');
            $table->string('table_number');
            $table->integer('number_of_persons');
            $table->date('reservation_date');
            $table->string('reservation_time');
            $table->text('description')->nullable();
            $table->integer('pre_order_quantity')->default(0);
            $table->string('pre_order_productname')->default('');
            $table->integer('pre_order_total')->default(0);
            $table->string('location');
            $table->enum('status', ['pending', 'done', 'cancelled'])->default('pending'); // Changed status field to enum
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
