<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invintory_id')->unsigned();
            $table->foreign('invintory_id')->references('id')->on('invintories')->ondelete('cascade')
            ->noupdate('cascade');
            $table->unsignedBigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->ondelete('cascade')
            ->noupdate('cascade');
            $table->integer('quantity');
            $table->unsignedBigInteger('orderpackage_id')->unsigned();
            $table->foreign('orderpackage_id')->references('id')->on('orderpackages')->ondelete('cascade')
            ->noupdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory_items');
        
        


    }
}
