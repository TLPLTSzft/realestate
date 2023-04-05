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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->require;
            $table->foreignId('realestate_id')->unique()->constrained('realestates')->require;
            // $table->unsignedBigInteger('realestate_id')->unique()->require;
            // $table->foreign('realestate_id')->references('id')->on('realestates');
            $table->date('booking_date')->require;
            $table->date('start_date')->require;
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};
