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
        Schema::create('commandes', function (Blueprint $table) {
            //Keys
            $table->id();
            $table->unsignedBigInteger('livreur_id')->nullable();
            $table->unsignedBigInteger('compte_id');
            $table->unsignedBigInteger('addresse_paiment_id')->nullable();

            //Attributes
            $table->string('status');
            $table->integer('montant');
            $table->timestamps();

            // Foreign key
            $table->foreign('compte_id')->references('id')->on('comptes')->onDelete('cascade');
            $table->foreign('livreur_id')->references('id')->on('livreurs')->onDelete('cascade');
            $table->foreign('addresse_paiment_id')->references('id')->on('addresse_paiments')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
};
