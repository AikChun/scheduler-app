<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('programme_type_id')->unsigned();
            $table->integer('facilitator_id')->unsigned();
            $table->dateTime('recess_start_date');
            $table->dateTime('recess_end_date');
            $table->string('year', 12);
            $table->integer('semester');
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
        Schema::drop('programmes');
    }
}
