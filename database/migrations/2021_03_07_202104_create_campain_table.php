<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campain', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("campain_name");
            $table->bigInteger("creator")->unsigned();
            $table->foreign("creator")->references('id')->on('users');
            $table->date("datecriation");
            $table->boolean("active")->default(1);
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
        Schema::dropIfExists('campain');
    }
}
