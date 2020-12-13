<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFashionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fashions', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 100);
            $table->enum('sex', ['PRIA', 'WANITA', 'UNISEX']);
            $table->string('jenis', 100);
            $table->string('bahan', 100);
            $table->enum('ukuran', ['XXL','XL', 'L','M','S']);
            $table->string('warna', 100);
            $table->string('merek', 100)->nullable();
            $table->string('harga', 100);
            $table->string('model', 100);
            $table->text('deskripsi')->nullable();
            $table->string('stok', 100)->nullable();
            $table->string('gambar', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_fashions');
    }
}
