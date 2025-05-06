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
        Schema::create('device_state_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id'); //(FK → devices.id)
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
            $table->unsignedBigInteger('from_state_id'); //(FK → device_states.id)
            $table->foreign('from_state_id')->references('id')->on('device_states')->onDelete('cascade');
            $table->unsignedBigInteger('to_state_id'); //(FK → device_states.id)
            $table->foreign('to_state_id')->references('id')->on('device_states')->onDelete('cascade');
            $table->unsignedBigInteger('changed_by'); //(FK → users.id)
            $table->foreign('changed_by')->references('id')->on('users')->onDelete('cascade');
            $table->string('note')->nullable(); 
            $table->timestamp('changed_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_state_histories');
    }
};
