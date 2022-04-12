<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_analyses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('classification')->nullable();
            $table->string('unit')->nullable();
            $table->unsignedBigInteger('analysis_main_id')->unsigned()->nullable();

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
        Schema::dropIfExists('additional_analyses');
    }
}
