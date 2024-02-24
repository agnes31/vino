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
        Schema::create('wine_rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->date('purchase_date');
            $table->date('revoke_date')->nullable();
            $table->year('vintage')->nullable();
            $table->string('notes', 100)->nullable();
            $table->timestamps();
            $table->bigInteger('cellars_id')->unsigned()->nullable();
            $table->bigInteger('saq_bottles_id')->unsigned()->nullable();

            $table->foreign('cellars_id')->references('id')->on('cellars');
            $table->foreign('saq_bottles_id')->references('id')->on('saq_bottles');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wine_rooms');
    }
};