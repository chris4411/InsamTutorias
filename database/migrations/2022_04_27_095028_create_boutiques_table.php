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
        Schema::create('boutiques', function (Blueprint $table) {

             //Keys
             $table->id();
             $table->unsignedBigInteger('vendeur_id');

             //Attributes
             $table->string('addresse_boutique');
             $table->string('nom_boutique');
             $table->timestamps();

             // Foreign key
             $table->foreign('vendeur_id')->references('id')->on('vendeurs')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boutiques');
    }
};
