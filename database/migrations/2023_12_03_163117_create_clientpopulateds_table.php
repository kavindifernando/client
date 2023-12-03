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
        Schema::create('clientpopulateds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->integer('Status');
            $table->double('Created');
            $table->integer('Tasks');
            $table->double('Contributers');
            $table->double('Budget($)');
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
        Schema::dropIfExists('clientpopulateds');
    }
};
