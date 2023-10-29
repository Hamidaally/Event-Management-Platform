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
            $table->id('event_id');
            $table->string('ename');
            $table->longText('description');
            $table->date('date');
            $table->time('time');
            $table->string('location');
<<<<<<< HEAD
            $table->string('types');
            $table->decimal('pricing',10,2);
            $table->boolean('status')->default(0);
=======
>>>>>>> 88f6a61b8bf5a7f691ee02f306206a53222ffe6e
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
