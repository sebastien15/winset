<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewsimages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('clientsreviews_id');
            $table->timestamps();

            $table->foreign('clientsreviews_id')->references('id')->on('clientsreviews')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviewsimages');
    }
}
