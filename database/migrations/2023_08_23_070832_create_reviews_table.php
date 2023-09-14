<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('review_id');
            $table->foreignId('user_id')->references('user_id')->on('users');
            $table->foreignId('event_id')->references('event_id')->on('events');
            $table->integer('rating');      
            $table->text('comments');


            //Define foreign key
          //  $table->foreign('user_id')->references('id')->on('users');
           // $table->foreign('event_id')->references('id')->on('events');
            
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
        Schema::dropIfExists('reviews');
    }
}
