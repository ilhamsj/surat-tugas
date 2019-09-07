<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_tugas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('undangan_id')->unsigned()->index();
            $table->foreign('undangan_id')
                    ->references('id')
                    ->on('undangans')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->bigInteger('pangkat_id')->unsigned()->index();
            $table->foreign('pangkat_id')
                    ->references('id')
                    ->on('pangkats')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('nomor');
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
        Schema::dropIfExists('surat_tugas');
    }
}