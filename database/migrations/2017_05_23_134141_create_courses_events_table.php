<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_events', function (Blueprint $table) {
            $table->integer('id_cursos')->unsigned();
            $table->foreign('id_cursos')->references('id')->on('courses')->onDelete('cascade');
            $table->integer('id_eventos')->unsigned();
            $table->foreign('id_eventos')->references('id')->on('events')->onDelete('cascade');

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
        Schema::dropIfExists('courses_events');
    }
}
