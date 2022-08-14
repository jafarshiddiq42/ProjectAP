<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dftrulangs', function (Blueprint $table) {
            $table->id();

            $table->boolean('confirmed')->default(false);
            $table->string('buktipembayaran')->default('default.jpg');
            $table->string('foto_nisn')->default('default.jpg');
            $table->string('ktp_ayah')->default('default.jpg');
            $table->string('ktp_ibu')->default('default.jpg');
            $table->string('surat_aktif')->default('default.jpg');
            $table->string('NPSN')->default('default.jpg');
            $table->string('fc_kk')->default('default.jpg');
            $table->string('fc_akta')->default('default.jpg');

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
        Schema::dropIfExists('dftrulangs');
    }
};
