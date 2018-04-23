<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZamowieniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamowienias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->integer('sites_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('zamowienias', function(Blueprint $table){
        $table->foreign('users_id')
            ->references('id')
            ->on('users');
        });

        Schema::table('zamowienias', function(Blueprint $table){
        $table->foreign('sites_id')
            ->references('id')
            ->on('sites');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zamowienias');
    }
}
