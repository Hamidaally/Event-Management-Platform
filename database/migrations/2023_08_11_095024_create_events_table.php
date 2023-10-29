<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('ename');
            $table->longText('description');
            $table->string('date');
            $table->string('time');
            $table->string('location');
<<<<<<< HEAD
=======
            $table->string('types');
            $table->integer('pricing');
>>>>>>> parent of 10a93d1 (Adding changes to the project)
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
        Schema::dropIfExists('events');
    }
}
