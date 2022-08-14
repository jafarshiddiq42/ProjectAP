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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('pin')->nullable();
            $table->boolean('checkpin')->nullable()->default(false);
            $table->string('id_santri')->nullable();
            $table->string('id_berkas')->nullable();
            $table->string('id_lewat')->nullable();
            // $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->nullable()->default(false);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
