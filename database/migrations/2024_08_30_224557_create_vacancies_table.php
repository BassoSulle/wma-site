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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('en_title')->required();
            $table->string('sw_title')->required();
            $table->string('slug')->unique();
            $table->string('en_file')->unique();
            $table->string('sw_file')->unique();
            $table->date('start_date')->unique();
            $table->string('end_date')->unique();
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
        Schema::dropIfExists('vacancies');
    }
};
