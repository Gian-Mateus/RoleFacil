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
            $table->id('client_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');            
            $table->string('client_name', 255);
            $table->string('client_cnpj', 14)->unique();
            $table->text('client_description');
            $table->string('client_zipcode', 8);
            $table->string('client_complement', 255);
            $table->string('client_adress', 255);
            $table->string('client_number_address', 20);
            $table->string('client_city', 100);
            $table->string('client_neighborhood', 100);
            $table->string('client_uf', 2);
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
