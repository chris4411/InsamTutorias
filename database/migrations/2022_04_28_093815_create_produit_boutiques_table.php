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
        Schema::create('produit_boutiques', function (Blueprint $table) {
             //Keys
             $table->id();
             $table->unsignedBigInteger('produit_id');
             $table->unsignedBigInteger('boutique_id');

             //Attributes
             $table->float('prix');
             $table->integer('qte_stock');
             $table->string('note');
             $table->string('status');
             $table->timestamps();

             // Foreign key
             $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
             $table->foreign('boutique_id')->references('id')->on('boutiques')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit_boutiques');
    }
};
