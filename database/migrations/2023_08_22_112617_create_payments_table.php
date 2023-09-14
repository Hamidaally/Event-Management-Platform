<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('transaction_id'); // Primary Key
            $table->foreignId('user_id');
            $table->foreignId('event_id');
            $table->foreignId('ticket_type_id');
            $table->decimal('amount', 10, 2);
            $table->timestamp('payment_date')->useCurrent();
            $table->string('status');
            $table->string('payment_method');

            // Define foreign keys
         //  $table->foreign('user_id')->references('id')->on('users');
           // $table->foreign('event_id')->references('id')->on('events');
           // $table->foreign('ticket_type_id')->references('id')->on('ticket_types');
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
