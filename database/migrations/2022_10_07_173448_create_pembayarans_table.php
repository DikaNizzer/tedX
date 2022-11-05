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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('bukti_bayar')->nullable();
            $table->string('institute')->nullable();
            $table->integer('age')->nullable();
            $table->timestamps();
            $table->integer('status');
            $table->foreignId('pendaftaran_id');
            $table->foreignId('pendaftaran_peserta_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
};
