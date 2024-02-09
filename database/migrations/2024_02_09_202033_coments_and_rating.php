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
        Schema::create('coments_and_rating', function (Blueprint $table) {
            $table->id('idcoments_and_rating');
            $table->string('author', 45);
            $table->text('comment');
            $table->integer('rating');
            $table->integer('events_idevent');
            $table->integer('clients_idclient');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coments_and_rating');
    }
};
