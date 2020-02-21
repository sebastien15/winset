<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('price')->nullable();
            $table->string('currency')->nullable();
            $table->string('status')->nullable();
            $table->string('smallDesc')->nullable();
            $table->string('bed')->nullable();
            $table->string('bath')->nullable();
            $table->string('sqmeter')->nullable();
            $table->unsignedBigInteger('location_id');            
            $table->unsignedBigInteger('type_id');
            $table->timestamps();
            
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
