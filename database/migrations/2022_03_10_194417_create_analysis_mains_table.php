<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalysisMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analysis_mains', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('str_name')->nullable();
            $table->string('code')->nullable();
            $table->float('cost')->nullable();
            $table->float('total')->nullable();
            $table->float('discount')->nullable();
            $table->float('inc_price')->nullable();
            $table->float('hosp_price')->nullable();
            $table->unsignedBigInteger('organization_id')->unsigned()->nullable();
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
        Schema::dropIfExists('analysis_mains');
    }
}
