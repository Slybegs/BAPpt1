<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatakuliahSulliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah_sullies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('kodeMatakuliah')->nullable();
            $table->text('namaMatakuliah')->nullable();
            $table->integer('sks')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matakuliah_sullies');
    }
}
