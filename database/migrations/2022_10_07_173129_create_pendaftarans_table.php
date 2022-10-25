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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('akun_ig', 255)->nullable();
            $table->string('kontak', 255)->nullable();
            $table->string('link_gdrive', 255)->nullable();
            $table->string('metode_bayar', 45)->nullable();
            $table->integer('status');
            $table->timestamps();
            $table->foreignId('event_id');
            $table->foreignId('peserta_id')->nullable();
            $table->foreignId('paket_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
};
