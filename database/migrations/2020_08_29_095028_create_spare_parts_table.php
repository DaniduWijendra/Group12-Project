<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSparePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spare_parts', function (Blueprint $table) {
            $table->string('sparePrtId',50)->primary();
            $table->string('sparePrtName',50);
            $table->string('brand',50);
            $table->string('model',50);
            $table->string('year',5);
            $table->float('price');
            $table->bigInteger('vehicleVid')->unsigned();
           // $table->foreign('vehiclid')->references('vId')->on('vehicles')->onDelete('cascade');
            $table->bigInteger('shpId')->unsigned();
           // $table->foreign('shpId')->references('shpId')->on('shops')->onDelete('cascade');
            $table->boolean('isDeleted');
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
        Schema::dropIfExists('spare_parts');
    }
}
