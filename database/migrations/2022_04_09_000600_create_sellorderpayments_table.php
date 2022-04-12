<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellorderpaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellorderpayments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->ondelete('cascade')
            ->noupdate('cascade');
            $table->unsignedBigInteger('sellorder_id')->unsigned();
            $table->foreign('sellorder_id')->references('id')->on('sellorders')->ondelete('cascade')
            ->noupdate('cascade');
            $table->text('note');
            $table->float('value');
            $table->date('payat');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellorderpayments');
    }
}
