<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('things', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('students_count');
            $table->integer('five');
            $table->double('five_percent');
            $table->integer('four');
            $table->double('four_percent');
            $table->integer('three');
            $table->double('three_percent');
            $table->integer('two');
            $table->double('two_percent');
            $table->double('cpu');
            $table->double('pu');
            $table->double('sa');
            $table->integer('report_id');
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
        Schema::dropIfExists('things');
    }
}
