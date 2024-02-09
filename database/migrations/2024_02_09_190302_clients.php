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
            $table->id('idclient');
            $table->string('name_client', 255);
            $table->string('cnpj', 14)->unique();
            $table->text('description_client');
            $table->string('zipcode', 8);
            $table->string('complement', 255);
            $table->string('adress', 255);
            $table->string('number_address', 20);
            $table->string('city', 100);
            $table->string('neighborhood', 100);
            $table->string('uf', 2);
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
