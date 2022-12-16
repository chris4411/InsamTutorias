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
        Schema::create('clients', function (Blueprint $table) {

            //keys
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('web_user_id')->nullable();

            //Attributes
            $table->enum('status', ['Nouveau', 'Ancien', 'Confirme'])->default('Nouveau');

            //Foreign Key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('clients');
    }
};
