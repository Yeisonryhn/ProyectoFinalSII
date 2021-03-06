<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name',40);
            $table->integer('length');
            $table->string('default',40)->nullable(true);
            $table->string('null',2);//Este dato se puede cambiar por integer, 0 y 1
            $table->unsignedBigInteger('table_id');
            $table->unsignedBigInteger('datatype_id');
            $table->timestamps();
            $table->foreign('table_id')->references('id')->on('tables')->onDelete('cascade');
            $table->foreign('datatype_id')->references('id')->on('datatypes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fields');
    }
}
