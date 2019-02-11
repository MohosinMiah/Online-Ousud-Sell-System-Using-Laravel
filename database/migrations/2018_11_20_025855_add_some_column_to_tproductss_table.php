<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeColumnToTproductssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tproducts', function (Blueprint $table) {

            $table->integer('qty')->nullable();

            $table->string('type')->nullable();

            $table->string('isavailable')->nullable();

            $table->float('offer')->nullable();

            $table->timestamp('expair_date')->nullable();

            $table->timestamp('expair_date_ousud')->nullable();

            $table->string('status')->nullable();
            
            $table->string('metakey')->nullable();

            $table->string('metadescription')->nullable();

            $table->string('addby')->nullable();

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
        Schema::table('tproducts', function (Blueprint $table) {
            
                  Schema::dropIfExists('tproducts');

        });
    }
}
