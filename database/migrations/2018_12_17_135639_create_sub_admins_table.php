<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_admins', function (Blueprint $table) {
            $table->increments('sa_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('user_id');
            $table->integer('w_id')->unsigned();
            $table->foreign('w_id')->references('ward_id')->on('wards');
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
        Schema::dropIfExists('sub_admins');
    }
}
