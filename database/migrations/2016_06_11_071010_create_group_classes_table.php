<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('course_id');
            $table->integer('group_number');
            $table->integer('number_of_students');
            $table->integer('total_hours');
            $table->integer('lecturer_id');
            $table->string('group_name');
            $table->string('venue');
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
        Schema::drop('group_classes');
    }
}
