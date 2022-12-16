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
        Schema::create('paniers', function (Blueprint $table) {

            //Keys
            $table->id();
            $table->unsignedBigInteger('web_user_id')->nullable();
            $table->unsignedBigInteger('compte_id');

            //Attributes
            $table->timestamps();

            // Foreign key
            $table->foreign('compte_id')->references('id')->on('comptes')->onDelete('cascade');
            $table->foreign('web_user_id')->references('id')->on('web_users')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paniers');
    }
};
