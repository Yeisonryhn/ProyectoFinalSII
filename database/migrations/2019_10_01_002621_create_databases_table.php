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
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name',40);
            $table->date('creation_date')->useCurrent();//Ojo con este método, es una prueba
            $table->unsignedBigInteger('d_b_engine_id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('collation_id');
            $table->timestamps();
            $table->foreign('d_b_engine_id')->references('id')->on('d_b_engines')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade')->unique();
            $table->foreign('collation_id')->references('id')->on('collations')->onDelete('cascade');
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
