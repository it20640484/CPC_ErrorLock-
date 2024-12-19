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
        Schema::create('errors_', function (Blueprint $table) {
            $table->id();
            $table->string('epfno');
            $table->string('name')->unique();
            $table->string('contactno');
            $table->string('date');
            $table->string('location');
            $table->string('section');
            $table->string('devicename');
            $table->string('brand');
            $table->string('model');
            $table->string('serialno');
            $table->string('issue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('errors_');
    }
};
