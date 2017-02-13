<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaravelCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laravel_currencies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('code');
            $table->integer('iso')->unsigned();

            $table->json('name');

            $table->string('fetchable');

            $table->timestamps();

            $table->unique('code');
            $table->unique('iso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laravel_currencies');
    }
}
