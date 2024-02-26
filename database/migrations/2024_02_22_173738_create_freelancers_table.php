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
        Schema::create('freelancers', function (Blueprint $table) {
            $table->id('freelancer_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('freelancer_title', 255);
            $table->text('freelancer_description');
            $table->string('freelancer_start', 20);
            $table->string('freelancer_end', 20);
            $table->string('freelancer_money', 20)->nullable();
            $table->string('freelancer_email', 255);
            $table->string('freelancer_phone', 11)->nullable();
            $table->string('freelancer_telefone_fixo', 10)->nullable();
            $table->boolean('freelancer_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancers');
    }
};
