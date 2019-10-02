<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('modification_date')->useCurrent();
            $table->string('reason',200);
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('table_id')->references('id')->on('tables');
            //$table->primary(['user_id', 'table_id']);
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
        Schema::dropIfExists('modifications');
    }
}
