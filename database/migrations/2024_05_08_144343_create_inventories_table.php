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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->integer('barang_masuk')->nullable();
            $table->integer('barang_keluar')->nullable();
            $table->string('satuan');
            $table->string('keterangan');
            $table->integer('stok_awal');
            $table->integer('stok_akhir');
            $table->date('tanggal');
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
        Schema::dropIfExists('inventories');
        // Schema::dropIfExists('inventories', function (Blueprint $table) {
        //     $table->integer('barang_masuk')->change();
        //     $table->integer('barang_keluar')->change();
        // });
    }
};
