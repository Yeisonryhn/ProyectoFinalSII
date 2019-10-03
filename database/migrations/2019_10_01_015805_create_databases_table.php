<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',20);
            $table->date('creation_date')->useCurrent();//Ojo con este método, es una prueba
            $table->integer('db_engine_id')->references('id')->on('d_b_engines');
            $table->integer('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->integer('collation_id')->references('id')->on('collations');
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
        Schema::dropIfExists('databases');
    }
}
