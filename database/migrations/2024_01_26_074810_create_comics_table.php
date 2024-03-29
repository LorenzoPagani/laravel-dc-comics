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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 100);
            $table->text('description');
            $table->text('thumb');
            $table->decimal('price');
            $table->text('series');
            $table->date('sale_date');
            $table->string('type', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
