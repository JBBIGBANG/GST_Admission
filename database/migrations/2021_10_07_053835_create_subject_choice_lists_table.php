<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectChoiceListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_choice_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('appid');
            $table->integer('Soil_&_Environmental_Science')->nullable();
            $table->integer('Botany')->nullable();
            $table->integer('Costal')->nullable();
            $table->integer('Mathematics')->nullable();
            $table->integer('Biochemistry')->nullable();
            $table->integer('CSE')->nullable();
            $table->integer('Chemistry')->nullable();
            $table->integer('Geology_&_Mining')->nullable();
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
        Schema::dropIfExists('subject_choice_lists');
    }
}
