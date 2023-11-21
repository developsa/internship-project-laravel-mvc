<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->float('fiyat');
            $table->text('kisa_bilgi')->nullable();
            $table->longText('urun_aciklama')->nullable();
            $table->text('img')->nullable();
            $table->integer('stok')->default(0);
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('categories');
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
        Schema::dropIfExists('products');
    }
}
