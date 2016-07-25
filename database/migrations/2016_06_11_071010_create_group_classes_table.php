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
            $table->datetime('end_date');
            $table->datetime('start_date');
            $table->integer('course_id');
            $table->integer('group_number');
            $table->integer('hours');
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
