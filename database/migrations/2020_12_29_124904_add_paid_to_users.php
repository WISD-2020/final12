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
            $table->integer('room_id')->nullable();
            $table->string('account',20)->nullable();
            $table->integer('contact_id')->nullable();
            $table->string('gender')->comment('0為女生，1為男生')->default('null');
            $table->string('phone',20)->default('null');
            $table->string('address',50)->default('null');
            $table->dateTime('birthday')->nullable();
            $table->boolean('id_type')->comment('預設值0,0為房客,1為管理員')->default('0');
            $table->string('remarks',255)->nullable();
            $table->dateTime('StartTime')->nullable();
            $table->dateTime('EndTime')->nullable();
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
            $table->integer('room_id')->nullable();
            $table->string('account',20)->nullable();
            $table->integer('contact_id')->nullable();
            $table->string('gender')->comment('0為女生，1為男生')->default('null');
            $table->string('phone',20)->default('null');
            $table->string('address',50)->default('null');
            $table->dateTime('birthday')->nullable();
            $table->boolean('id_type')->comment('預設值0,0為房客,1為管理員')->default('0');
            $table->string('remarks',255)->nullable();
            $table->dateTime('StartTime')->nullable();
            $table->dateTime('EndTime')->nullable();
        });
    }
}
