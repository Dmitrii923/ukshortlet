<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vehicleid')->nullable();;
            $table->string('headid')->nullable();;
            $table->string('milege')->nullable();;
            $table->string('date')->nullable();;
            $table->string('amount')->nullable();;
            $table->string('taxpercent')->nullable();;
            $table->string('totalamount')->nullable();;
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
        Schema::dropIfExists('incomes');
    }
}
