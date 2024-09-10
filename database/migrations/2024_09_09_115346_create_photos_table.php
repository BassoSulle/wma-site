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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('en_caption')->nullable();
            $table->string('sw_caption')->nullable();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('gallery_id')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('gallery_id')
            ->references('id')
            ->on('galleries')
            ->OnDelete('cascade');

            $table->foreign('created_by')
            ->references('id')
            ->on('users')
            ->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
