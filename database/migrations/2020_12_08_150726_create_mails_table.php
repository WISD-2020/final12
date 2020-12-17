<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('room_id',20);
            $table->boolean('category')->comment('0為信件,1為包裹');
            $table->string('ArrivalTime',20);
            $table->boolean('statu')->comment('0為已通知,1為已領取');
            $table->dateTime('collection_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mails');
    }
}
