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
        Schema::create('region_offices', function (Blueprint $table) {
            $table->id();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_position')->nullable();
            $table->string('region_name')->required();
            $table->string('slug')->unique();
            $table->string('en_content')->nullable();
            $table->string('sw_content')->nullable();
            $table->string('location')->required();
            $table->string('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->UnsignedBigInteger('created_by')->nullable();
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
        Schema::dropIfExists('region_offices');
    }
};
