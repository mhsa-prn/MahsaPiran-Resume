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
        Schema::create('profile_data', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->default('Mahsa');
            $table->string('last_name')->default('Piran');
            $table->date('birth_date')->default('2000-12-28');
            $table->string('gender')->default('Female')->value('','');
            $table->text('short_description')->nullable();
            $table->text('summary')->nullable();
            $table->string('photo')->nullable();
            $table->text('address')->nullable()->default('Damavand St, Tehran, Iran');
            $table->string('email')->default('mhsa.prn@gmail.com');
            $table->string('mobile')->default('+989904106192');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_data');
    }
};
