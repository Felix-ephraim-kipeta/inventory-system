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
            $table->integer('device_id'); //(FK → devices.id)
            $table->integer('from_state_id'); //(FK → device_states.id)
            $table->integer('to_state_id'); //(FK → device_states.id)
            $table->integer('changed_by'); //(FK → users.id)
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
