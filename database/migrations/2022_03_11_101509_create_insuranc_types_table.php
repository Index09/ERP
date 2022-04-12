<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsurancTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insuranc_types', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('insuranc_comp_id')->unsigned()->nullable();

            $table->string('name')->nullable();

            $table->float('percentage')->nullable();
            
            
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
        Schema::dropIfExists('insuranc_types');
    }
}
