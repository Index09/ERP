<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellorderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellorder_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orderpackage_id')->unsigned();
            $table->foreign('orderpackage_id')->references('id')->on('orderpackages')->ondelete('cascade')
            ->noupdate('cascade');
            $table->unsignedBigInteger('sellorder_id')->unsigned();
            $table->foreign('sellorder_id')->references('id')->on('sellorder')->ondelete('cascade')
            ->noupdate('cascade');
            $table->unsignedBigInteger('customer_id')->unsigned();
            $table->string('name');
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
        Schema::dropIfExists('sellorder_items');
    }
}
