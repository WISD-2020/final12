<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('room_id',20);
            $table->string('account',20);
            $table->integer('contact_id');
            $table->string('gender')->comment('0為女生，1為男生')->default('null')->nullable();
            $table->string('phone',20);
            $table->string('address',50)->nullable();
            $table->dateTime('birthday');
            $table->boolean('id_type')->comment('預設值0,0為房客,1為管理員');
            $table->string('remarks',255)->nullable();
            $table->dateTime('StartTime');
            $table->dateTime('EndTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
