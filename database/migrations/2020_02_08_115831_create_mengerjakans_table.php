<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMengerjakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mengerjakans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tugas_id')->index();
            $table->unsignedBigInteger('user_id')->index()->comment('siswa');
            $table->string('body')->nullable();
            $table->longText('files')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('mengerjakans');
    }
}
