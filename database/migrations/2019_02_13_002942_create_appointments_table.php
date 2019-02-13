<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('user_id_created');
            $table->foreign('user_id_created')->references('id')->on('users');

            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->string('client_name', 250);
            $table->string('client_contact', 128);
            $table->decimal('price_expected', 10,2);
            $table->decimal('price_full', 10,2);
            $table->decimal('discount', 10,2);
            $table->decimal('price_final', 10,2);
            $table->boolean('canceled');
            $table->text('cancelation_reason');
            $table->timestamp('start_at');
            $table->timestamp('ends_at_expected');
            $table->timestamp('ends_at');
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
        Schema::dropIfExists('appointments');
    }
}
