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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('en_title')->required();
            $table->string('sw_title')->required();
            $table->string('slug')->unique();
            $table->string('en_details')->nullable();
            $table->string('sw_details')->nullable();
            $table->unsignedBigInteger('form_category_id')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->OnDelete('cascade');

            $table->foreign('form_category_id')
                ->references('id')
                ->on('form_categories')
                ->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};