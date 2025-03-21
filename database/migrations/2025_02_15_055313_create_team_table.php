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
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('name_team')->nullable();
            $table->string('logo_team')->nullable();
            $table->string('location_team')->nullable();
            $table->unsignedBigInteger('total_member')->nullable();
            $table->unsignedBigInteger('member')->nullable();
            $table->text('description_team')->nullable();
            $table->string('scope_team')->nullable();
            $table->boolean('status')->nullable();
            $table->unsignedBigInteger('id_users')->nullable();
            $table->timestamps();

            $table->foreign('id_users')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team');
    }
};