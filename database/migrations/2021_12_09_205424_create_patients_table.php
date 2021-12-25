<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id',20)->unsigned();
            $table->bigInteger('vaccine_id')->unsigned();
            $table->foreign('vaccine_id',20)->references('id')->on('vaccines')->onDelete('cascade');
            $table->string('name',255);
            $table->string('nik',255);
            $table->string('alamat',255);
            $table->string('image_ktp',255);
            $table->string('no_hp',255);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
