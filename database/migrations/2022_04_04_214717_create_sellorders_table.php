<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellorder', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orderpackage_id')->unsigned();
            $table->foreign('orderpackage_id')->references('id')->on('orderpackages')->ondelete('cascade')
            ->noupdate('cascade');
            $table->unsignedBigInteger('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->ondelete('cascade')
            ->noupdate('cascade');
            $table->float('overall')->nullable();
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
        Schema::dropIfExists('sellorders');
    }
}
