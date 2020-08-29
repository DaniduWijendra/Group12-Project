<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->string('adminId',6);
            $table->string('fName',50);
            $table->string('lName',50);
            $table->string('adminAddress',100);
            $table->string('adminGender',1);
            $table->date('adminDOB');
            $table->integer('adminContactNo');
            $table->string('adminEmail',50);
            $table->primary('adminId');
            
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
        Schema::dropIfExists('admins');
    }
}
