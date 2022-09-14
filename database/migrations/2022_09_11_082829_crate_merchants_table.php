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
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->string('nama_merchant')->nullable();
            $table->bigInteger('idkategori');
            $table->bigInteger('idsubkategori');
            $table->bigInteger('idpaket');
            $table->dateTime('tgldaftar')->default(date('Y-m-d'));
            $table->dateTime('tglberakhir');
            $table->string('url_gambar')->nullable();
            $table->string('url_video')->nullable();
            $table->boolean('status')->default(false);
            $table->string('keterangan')->nullable();
            $table->string('telp')->nullable();
            $table->string('lat1')->nullable();
            $table->string('lng1')->nullable();
            $table->boolean('verifikasi')->default(false);
            $table->string('email');
            $table->string('password');
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
        //
    }
};
