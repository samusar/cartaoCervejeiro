<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('client_id');
            $table->foreign('client_id')
                    ->references('id')->on('clients')
                    ->onDelete('cascade');
            
            $table->integer('provider_id');
            $table->foreign('provider_id')
                    ->references('id')->on('providers')
                    ->onDelete('cascade');

            $table->double('previous_balance');
            $table->double('value');
            $table->dateTime('date');
            
            $table->integer('type_movement_id');
            $table->foreign('type_movement_id')
                    ->references('id')->on('type_movements')
                    ->onDelete('cascade');


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
        Schema::dropIfExists('movements');
    }
}
