<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageGroupUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_group_users', function (Blueprint $table) {
            $table->integer('user_id');
			$table->foreign('user_id')->references('id')->on('users');
			$table->integer('message_group_id');
			$table->foreign('message_group_id')->references('id')->on('message_groups');
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
        Schema::drop('message_group_users');
    }
}
