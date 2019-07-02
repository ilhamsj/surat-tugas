<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratUndangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_undangan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id');
            // $table->string('no_surat', 30);
            $table->string('pengundang', 50);
            // $table->string('perihal', 30);
            // $table->string('nama_acara', 50);
            // $table->timestamp('waktu');
            // $table->string('tempat', 100);
            $table->text('file');
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
        Schema::dropIfExists('surat_undangans');
    }
}
