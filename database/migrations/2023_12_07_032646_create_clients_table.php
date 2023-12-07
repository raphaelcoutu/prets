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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('banner')->nullable();
            $table->boolean('charge_administration_fees')->default(false);
            $table->string('street_number')->nullable();
            $table->string('street_name')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('phone_number_1')->nullable();
            $table->string('phone_number_2')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('email')->nullable();
            $table->string('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
