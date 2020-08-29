<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicyholdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policyholders', function (Blueprint $table) {
            $table->string('pId',6)->primary();
            $table->string('NIC',10)->unique();
            $table->string('fName',50);
            $table->string('lName',50);
            $table->string('pAddress',50);
            $table->char('pGender',1);
            $table->date('pDOB');
            $table->integer('pContactNo');

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
        Schema::dropIfExists('policyholders');
    }
}
