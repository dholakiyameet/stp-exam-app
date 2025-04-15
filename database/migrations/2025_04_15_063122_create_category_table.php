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
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->integer('min_quantity');
            $table->integer('max_quantity');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('discount_type');
            $table->integer('discount_value');
            $table->integer('priority_level');
            $table->boolean('exclusive_rule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
