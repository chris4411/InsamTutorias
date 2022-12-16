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
        Schema::create('produits', function (Blueprint $table) {

            // Keys
            $table->id();

            //Attributes
            $table->string('name');
            $table->string('technical_name');
            $table->string('image')->nullable();
            $table->integer('stock');
            $table->string('genre');
            $table->enum('categorie', config('constants.PRODUIT_CATEGORIES'))->default(config('constants.PRODUIT_CATEGORIES')[2]);
            $table->text('description');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
