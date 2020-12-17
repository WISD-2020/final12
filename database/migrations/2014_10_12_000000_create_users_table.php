<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();

            $table->string('room_id',20);
            $table->string('account',20);
            $table->integer('contact_id');
            $table->boolean('gender')->comment('0為女生，1為男生');
            $table->string('phone',20);
            $table->string('address',50)->nullable();
            $table->dateTime('birthday');
            $table->string('id_number',255);
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
        Schema::dropIfExists('users');
    }
}
