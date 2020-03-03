<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Address', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rest_id');
            $table->string('region');
            $table->string('nas_punkt');
            $table->string('street');
            $table->string('house');
            $table->string('index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Address');
    }
}
