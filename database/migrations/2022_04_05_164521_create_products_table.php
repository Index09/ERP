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
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('orderpackage_id')->unsigned();
            $table->foreign('orderpackage_id')->references('id')->on('orderpackages')->ondelete('cascade')
            ->noupdate('cascade');
            $table->string('name');
            $table->string('disc');
            $table->string('code');
            $table->float('buy_price');
            $table->float('sell_price');
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
