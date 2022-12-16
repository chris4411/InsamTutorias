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
        Schema::create('item_paniers', function (Blueprint $table) {
            //Keys
            $table->id();
            $table->unsignedBigInteger('commande_id');
            $table->unsignedBigInteger('panier_id');
            $table->unsignedBigInteger('produit_boutique_id');

            //Attributes
            $table->float('prix');
            $table->integer('qte');
            $table->timestamps();

            // Foreign key
            $table->foreign('commande_id')->references('id')->on('commandes')->onDelete('cascade');
            $table->foreign('panier_id')->references('id')->on('paniers')->onDelete('cascade');
            $table->foreign('produit_boutique_id')->references('id')->on('produit_boutiques')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_paniers');
    }
};
