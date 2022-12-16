<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresse_paiments', function (Blueprint $table) {
            //Keys
            $table->id();
            $table->unsignedBigInteger('compte_id');

            //Attributes
            $table->string('mode_paiment');
            $table->timestamps();

            // Foreign key
            $table->foreign('compte_id')->references('id')->on('comptes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresse_paiments');
    }
};
