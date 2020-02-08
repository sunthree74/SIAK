<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->index();
            $table->string('nisn')->unique();
            $table->text('alamat');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->date('tahun_masuk');
            $table->string('gender', 1);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('sekolah_asal');
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
        Schema::dropIfExists('students');
    }
}
