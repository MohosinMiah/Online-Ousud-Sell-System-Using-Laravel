<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('customer_id');
        $table->string('house',100);
        $table->string('road',100);
        $table->string('area',120);
        $table->string('city',120);
        $table->integer('zip');
        $table->string('phone',20);
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
        Schema::dropIfExists('shippings');
    }
}
