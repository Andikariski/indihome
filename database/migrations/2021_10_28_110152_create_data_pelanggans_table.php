<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pelanggan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tahun');
            $table->bigInteger('januari');
            $table->bigInteger('februari');
            $table->bigInteger('maret');
            $table->bigInteger('april');
            $table->bigInteger('mei');
            $table->bigInteger('juni');
            $table->bigInteger('juli');
            $table->bigInteger('agustus');
            $table->bigInteger('september');
            $table->bigInteger('oktober');
            $table->bigInteger('november');
            $table->bigInteger('desember');
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
        Schema::dropIfExists('data_pelanggan');
    }
}
