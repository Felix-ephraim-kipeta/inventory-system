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
            $table->unsignedBigInteger('device_id'); //(FK → devices.id)
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
            $table->unsignedBigInteger('archived_by'); //(FK → users.id)
            $table->foreign('archived_by')->references('id')->on('users')->onDelete('cascade');
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
