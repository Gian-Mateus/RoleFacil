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
        Schema::create('events', function (Blueprint $table) {
            $table->id('idevent');
            $table->string('title_event', 255);
            $table->text('description_event');
            $table->date('date_event');
            $table->time('hour_event');
            $table->integer('classification');
            $table->string('local', 255);
            $table->string('social_media_link', 255);
            $table->date('date_sale_ticket');
            $table->string('uf', 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
