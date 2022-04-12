<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            
        $table->unsignedBigInteger('organization_id')->unsigned()->nullable();
        $table->string('name')->nullable();
        $table->string('engname')->nullable();
        $table->unsignedBigInteger('country_id')->unsigned()->nullable();
        $table->unsignedBigInteger('blood_type')->unsigned()->nullable();
        $table->string('identity')->nullable();
        $table->unsignedBigInteger('gender')->unsigned()->nullable();
        $table->string('phone')->nullable();
        $table->string('age')->nullable();
        $table->string('email')->nullable();
        $table->string('address')->nullable();
        $table->string('city')->nullable();
        $table->string('chr_diseases')->nullable();
        $table->string('weight')->nullable();
        $table->string('serial_num')->nullable();

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
        Schema::dropIfExists('patients');
    }
}
