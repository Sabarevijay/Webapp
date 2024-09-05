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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('regnumber');
            $table->string('department');
            $table->string('year');
            $table->string('email_id')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_phone_number')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_phone_number')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('pincode')->nullable();
            $table->string('hostel_namee')->nullable();
            $table->string('hostel_room_number')->nullable();
            $table->string('warden_name')->nullable();
            $table->string('warden_phone_number')->nullable();
            $table->string('care_taker_name')->nullable();
            $table->string('care_taker_phone_number')->nullable();
            $table->string('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
