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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_email', 255)->unique();
            $table->string('user_password', 100);
            $table->string('user_name', 255);
            $table->string('user_cnpj', 14)->unique();
            $table->text('user_description')->nullable();
            $table->string('user_zipcode', 8);
            $table->string('user_complement', 100);
            $table->string('user_adress', 100);
            $table->string('user_number_address', 20);
            $table->string('user_city', 50);
            $table->string('user_neighborhood', 50);
            $table->string('user_uf', 2);
            $table->text('user_facebook_link')->nullable();
            $table->text('user_instagram_link')->nullable();
            $table->string('user_celular', 9);
            $table->string('user_ddd_celular', 2);
            $table->string('user_telefone_fixo', 8);
            $table->string('user_ddd_telefone_fixo', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
