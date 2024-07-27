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
        Schema::create('pollution_questions_form_data', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('activity')->nullable();
            $table->string('polution_1')->nullable();
            $table->text('polution_1v')->nullable();
            $table->string('polution_2')->nullable();
            $table->text('polution_2v')->nullable();
            $table->string('polution_3')->nullable();
            $table->text('polution_3v')->nullable();
            $table->string('polution_4')->nullable();
            $table->text('polution_4v')->nullable();
            $table->text('polution_5')->nullable();
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
        Schema::dropIfExists('pollution_questions_form_data');
    }
};
