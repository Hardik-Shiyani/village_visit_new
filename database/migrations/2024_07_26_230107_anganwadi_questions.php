<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anganwadi_questions', function (Blueprint $table) {
            $table->id();
            $table->string('taluka_name');
            $table->string('village_name');
            $table->string('anganwadi_1')->nullable();
            $table->string('anganwadi_2')->nullable();
            $table->string('anganwadi_3')->nullable();
            $table->string('anganwadi_4')->nullable();
            $table->string('anganwadi_5')->nullable();
            $table->string('anganwadi_6')->nullable();
            $table->string('anganwadi_6v')->nullable();
            $table->string('anganwadi_7')->nullable();
            $table->string('anganwadi_8')->nullable();
            $table->string('anganwadi_9')->nullable();
            $table->string('anganwadi_10')->nullable();
            $table->string('anganwadi_11')->nullable();
            $table->string('anganwadi_12')->nullable();
            $table->string('anganwadi_13w1')->nullable();
            $table->string('anganwadi_13h1')->nullable();
            $table->string('anganwadi_13pt1')->nullable();
            $table->string('anganwadi_13w2')->nullable();
            $table->string('anganwadi_13h2')->nullable();
            $table->string('anganwadi_13pt2')->nullable();
            $table->string('anganwadi_13w3')->nullable();
            $table->string('anganwadi_13h3')->nullable();
            $table->string('anganwadi_13pt3')->nullable();
            $table->string('anganwadi_13w4')->nullable();
            $table->string('anganwadi_13h4')->nullable();
            $table->string('anganwadi_13pt4')->nullable();
            $table->string('anganwadi_13w5')->nullable();
            $table->string('anganwadi_13h5')->nullable();
            $table->string('anganwadi_13pt5')->nullable();
            $table->string('anganwadi_14')->nullable();
            $table->string('anganwadi_15')->nullable();
            $table->string('anganwadi_16')->nullable();
            $table->string('anganwadi_17')->nullable();
            $table->string('anganwadi_17v')->nullable();
            $table->string('anganwadi_18g')->nullable();
            $table->string('anganwadi_18y')->nullable();
            $table->string('anganwadi_18r')->nullable();
            $table->string('anganwadi_19')->nullable();
            $table->string('anganwadi_19v')->nullable();
            $table->string('anganwadi_20')->nullable();
            $table->string('anganwadi_20v')->nullable();
            $table->string('anganwadi_21')->nullable();
            $table->string('anganwadi_21v')->nullable();
            $table->string('anganwadi_22')->nullable();
            $table->string('anganwadi_22v')->nullable();
            $table->string('anganwadi_23')->nullable();
            $table->string('anganwadi_24')->nullable();
            $table->string('anganwadi_24v')->nullable();
            $table->string('anganwadi_25')->nullable();
            $table->integer('details_added_by')->nullable();
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
        Schema::dropIfExists('anganwadi_questions');
    }
};
