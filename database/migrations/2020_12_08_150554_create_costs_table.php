<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('room_id',20);
           /*$table->foreign('room_id')->references('id')->on('users');*/
            $table->integer('waterbill');
            $table->integer('consumption');
            $table->integer('public_e');
            $table->integer('rent');
            $table->boolean('w_status')->comment('0為未繳費,1為已繳費');
            $table->boolean('e_status')->comment('0為未繳費,1為已繳費');
            $table->boolean('r_status')->comment('0為未繳費,1為已繳費');
            $table->dateTime('cost_month');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costs');
    }
}
