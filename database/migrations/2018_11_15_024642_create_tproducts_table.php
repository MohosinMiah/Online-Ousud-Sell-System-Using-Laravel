<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tproducts', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('cat_id');

            $table->string('brand_name');

            $table->string('generic_name')->nullable();

            $table->string('strength')->nullable();

            $table->string('dosage')->nullable();

            $table->float('price')->nullable();

            $table->string('userfor')->nullable();

            $table->string('dar')->nullable();
            $table->string('img_one')->nullable();

            $table->string('img_two')->nullable();

            $table->text('description')->nullable();

         

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tproducts');
    }
}
