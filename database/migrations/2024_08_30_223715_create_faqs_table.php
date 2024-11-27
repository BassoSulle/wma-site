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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('en_question')->required();
            $table->string('sw_question')->required();
            $table->string('slug')->unique();
            $table->text('en_answer')->nullable();
            $table->text('sw_answer')->nullable();
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
        Schema::dropIfExists('faqs');
    }
};