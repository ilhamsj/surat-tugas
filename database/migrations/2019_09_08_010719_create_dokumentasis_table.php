<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokumentasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumentasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pelaksana_id')->unsigned()->index();
            $table->foreign('pelaksana_id')
                ->references('id')
                ->on('pelaksanas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('judul');
            $table->text('deskripsi');
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
        Schema::dropIfExists('dokumentasis');
    }
}
