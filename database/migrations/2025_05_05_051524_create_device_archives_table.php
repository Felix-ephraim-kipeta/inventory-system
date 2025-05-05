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
        Schema::create('device_archives', function (Blueprint $table) {
            $table->id();
            $table->string('device_id'); //(FK → devices.id)
            $table->string('archived_by'); //(FK → users.id)
            $table->string('device_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_archives');
    }
};
