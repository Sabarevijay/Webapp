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
        Schema::create('piclabs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('regnumber');
            $table->string('name');
            $table->string('year');
            $table->string('department');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piclabs');
    }
};
