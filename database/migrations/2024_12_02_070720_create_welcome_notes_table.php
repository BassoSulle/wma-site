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
        Schema::create('welcome_notes', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('name')->required();
            $table->string('slug')->unique();
            $table->string('en_status')->required();
            $table->string('sw_status')->required();
            $table->text('en_description')->nullable();
            $table->text('sw_description')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();


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
        Schema::dropIfExists('welcome_notes');
    }
};
