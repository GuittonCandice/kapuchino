<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id');
            $table->timestamps();
            $table->integer('user_id');
        });
        
        //
         Schema::create('type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
