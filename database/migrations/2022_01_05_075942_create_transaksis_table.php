<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id',50)->unsigned();
            $table->foreignId('idCust')->unsigned();
            $table->foreign('idCust')->references('id')->on('customer')->onDelete('cascade');
            $table->foreignId('idJasa')->unsigned();
            $table->foreign('idJasa')->references('id')->on('jasa')->onDelete('cascade');
            $table->foreignId('idVendor')->unsigned();
            $table->foreign('idVendor')->references('id')->on('vendor')->onDelete('cascade');
            $table->string('status',255);
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
        Schema::dropIfExists('transaksi');
    }
}
