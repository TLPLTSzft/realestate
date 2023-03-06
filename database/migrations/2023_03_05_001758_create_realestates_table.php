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
        Schema::create('realestates', function (Blueprint $table) {

            $furnishing = ['bútor nélkül', 'alap felszerelés', 'teljesen bútorozott'];

            $table->id();
            $table->string('realestate_code', 7)->require;
            $table->string('address', 200)->require;
            $table->double('room', 2, 1)->require;
            $table->enum('furnishing', $furnishing)->require;
            $table->integer('rental_fee')->nullable();
            $table->integer('sale_price')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realestates');
    }
};
