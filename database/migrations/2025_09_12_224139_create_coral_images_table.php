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
        Schema::create('coral_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sensor_id')->index();
            $table->mediumText('image_data')->charset('binary');
            $table->timestamp('captured_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coral_images');
    }
};
