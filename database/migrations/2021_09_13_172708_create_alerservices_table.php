<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlerservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerservices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serviceid')->nullable();;
            $table->string('cityid')->nullable();;
            $table->string('email')->nullable();;
            $table->string('optionval')->nullable();;
            $table->string('duration')->nullable();;
            $table->string('total')->nullable();;
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
        Schema::dropIfExists('alerservices');
    }
}
