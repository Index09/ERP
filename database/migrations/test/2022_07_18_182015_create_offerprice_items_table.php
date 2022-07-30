<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferpriceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offerprice_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offerprice_id')->unsigned();
            $table->foreign('offerprice_id')->references('id')->on('offerprices')->ondelete('cascade')
            ->noupdate('cascade');
            $table->unsignedBigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->ondelete('cascade')
            ->noupdate('cascade');
            $table->float('price');
            $table->integer('quantity');
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
        Schema::dropIfExists('offerprice_items');
    }
}
