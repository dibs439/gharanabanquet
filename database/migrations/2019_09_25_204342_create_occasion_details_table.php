<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOccasionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occasion_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('occasion_id')->references('id')->on('occasions')->onUpdate('cascade')->onDelete('cascade');;
            $table->string('title');
            $table->string('description');
            $table->string('photo', 25);
            $table->enum('active', array('0', '1'));
            $table->integer('sl_no');
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
        Schema::dropIfExists('occasion_details');
    }
}
