<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasa', function (Blueprint $table) {
            $table->bigIncrements('id',50)->unsigned();
            $table->string('namaJasa',255);
            $table->string('deskripsi',255);
            $table->string('gambar',255);
            $table->string('harga',255);
            $table->string('lokasi',255);
            $table->foreignId('idVendor')->unsigned();
            $table->foreign('idVendor')->references('id')->on('vendor')->onDelete('cascade');
            $table->foreignId('idKategori')->unsigned();
            $table->foreign('idKategori')->references('id')->on('kategori')->onDelete('cascade');
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
        Schema::dropIfExists('jasa');
    }
}
