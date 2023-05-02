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

            $table->id();
            $table->string('realestate_code', 7)->unique()->require;
            $table->string('address', 100)->require;
            $table->decimal('room', 2, 1)->require;
            $table->foreignId('furnishing_id')->constrained('furnishings')->require;
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
