<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('title');
            $table->string('price');
            $table->string('area');
            $table->string('numberpeople');
            $table->string('status');
            $table->string('discription');
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('slugs');
            $table->string('acreage');
            $table->integer('id_user');
            $table->integer('id_roomtype');
            $table->integer('id_province');
            $table->integer('id_district');
            $table->integer('id_ward');
            $table->integer('accept');
            $table->integer('deleted_at');
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
        Schema::dropIfExists('rooms');
    }
}
