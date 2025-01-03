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
        Schema::create('updateprofiles', function (Blueprint $table) {
            $table->id();
            $table->string('epfno');
            $table->string('username')->unique();
            $table->string('fullname')->nullable();
            $table->string('contactno');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('currentpassword');
            $table->string('newpassword');
            $table->string('confirmpassword');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('updateprofiles');
    }
};
