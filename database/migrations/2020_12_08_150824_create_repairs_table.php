<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('room_id',20);
            $table->string('raintenance_staff',20)->nullable();
            $table->string('repair_content',255);
            $table->integer('repair_fess')->nullable();
            $table->dateTime('return_date');
            $table->dateTime('reply')->nullable();
            $table->dateTime('repair_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repairs');
    }
}
