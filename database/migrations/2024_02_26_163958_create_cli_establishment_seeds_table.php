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
        Schema::create('cli_establishment_seeds', function (Blueprint $table) {
            $table->id('cli_establishment_seed_id');
            $table->string('cli_establishment_seed_name', 50)->nullable();
            $table->text('cli_establishment_seed_description')->nullable();
            $table->string('cli_establishment_seed_address', 255)->nullable();
            $table->string('cli_establishment_seed_address_formatted', 255)->nullable();
            $table->string('cli_establishment_seed_phone', 11)->nullable();
            $table->string('cli_establishment_seed_phone_formatted', 20)->nullable();
            $table->string('cli_establishment_seed_city', 50)->nullable();
            $table->string('cli_establishment_seed_zipcode', 10)->nullable();
            $table->string('cli_establishment_seed_neighborhood', 50)->nullable();
            $table->string('cli_establishment_seed_number_address', 20)->nullable();
            $table->string('cli_establishment_seed_uf', 2)->nullable();
            $table->string('cli_establishment_seed_lat', 20)->nullable();
            $table->string('cli_establishment_seed_lng', 20)->nullable();
            $table->text('cli_establishment_seed_categories')->nullable();
            $table->text('cli_establishment_seed_operation')->nullable();
            $table->text('cli_establishment_seed_imgs')->nullable();
            $table->text('cli_establishment_seed_link_instagram')->nullable();
            $table->text('cli_establishment_seed_link_website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cli_establishment_seeds');
    }
};
