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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('en_title')->required();
            $table->string('sw_title')->required();
            $table->string('slug')->unique();
            $table->string('en_file')->unique();
            $table->string('sw_file')->unique();
            $table->unsignedBigInteger('pub_category_id')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();

// Defining Foreign key
            $table->foreign('created_by')
            ->references('id')
            ->on('users')
            ->OnDelete('cascade');

            $table->foreign('pub_category_id')
            ->references('id')
            ->on('publication_categories')
            ->OnDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
