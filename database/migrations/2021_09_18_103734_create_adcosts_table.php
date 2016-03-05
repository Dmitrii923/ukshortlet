<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdcostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adcosts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('period')->nullable();
            $table->string('private_std_list_price')->nullable();
            $table->string('private_feature_list_price')->nullable();
            $table->string('agency_std_list_price')->nullable();
            $table->string('agency_feature_list_price')->nullable();
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
        Schema::dropIfExists('adcosts');
    }
}
