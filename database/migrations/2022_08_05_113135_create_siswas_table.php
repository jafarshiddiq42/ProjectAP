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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();

            // calon siswa
            $table->string('NamaLengkap')->nullable();
            $table->string('NISN')->nullable();
            $table->string('JKelamin')->nullable();
            $table->string('Instansi')->nullable();
            $table->string('PasFoto')->default('default.jpg');
            $table->string('TptLahir')->nullable();
            $table->date('TglLahir')->nullable();
            $table->string('SekolahAsal')->nullable();
            $table->string('Kewarganegaraan')->nullable();
            // $table->string('Hobi')->nullable();
            // $table->string('Cita_Cita')->nullable();
            // ayah
            $table->string('NamaAyah')->nullable();
            $table->string('HpAyah')->nullable();
            $table->string('PendidikanAyah')->nullable();
            $table->string('PekerjaanAyah')->nullable();
            $table->string('PenghasilanAyah')->nullable();
            // ibu
            $table->string('NamaIbu')->nullable();
            $table->string('HpIbu')->nullable();
            $table->string('PendidikanIbu')->nullable();
            $table->string('PekerjaanIbu')->nullable();
            $table->string('PenghasilanIbu')->nullable();

              // wali
            $table->string('NamaWali')->nullable();
            $table->string('HpWali')->nullable();
            $table->string('HubunganWali')->nullable();
            $table->string('PekerjaanWali')->nullable();
            // 
            $table->string('status')->nullable();
            $table->string('Alamat')->nullable();
            $table->string('MenetapDengan')->nullable();
            // $table->string('Goldar')->nullable();
            $table->string('TB')->nullable();
            $table->string('BB')->nullable();
            // $table->string('Alergi')->nullable();
            // $table->string('RiwayatSakit')->nullable();
          
            // $table->string('tahunajar')->nullable();
            $table->boolean('confirmed')->nullable()->default(false);
           

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
        Schema::dropIfExists('siswas');
    }
};
