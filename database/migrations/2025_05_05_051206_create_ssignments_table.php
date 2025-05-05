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
        Schema::create('ssignments', function (Blueprint $table) {
            $table->id();
            $table->integer('device_id'); //(FK → devices.id)
            $table->integer('user_id'); //(nullable FK → users.id)
            $table->integer('location_id'); //(nullable FK → locations.id)
            $table->string('assigned_by');//(FK → users.id)` 
            $table->timestamp('assigned_at');
            $table->timestamp('returned_at');//nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ssignments');
    }
};
