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
        Schema::create('water_questions', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('activity')->nullable();
            $table->string('water_1')->nullable();
            $table->text('water_1v')->nullable();
            $table->string('water_2')->nullable();
            $table->text('water_2v')->nullable();
            $table->string('water_3')->nullable();
            $table->text('water_3v')->nullable();
            $table->string('water_4')->nullable();
            $table->text('water_4v')->nullable();
            $table->string('water_5')->nullable();
            $table->text('water_5v')->nullable();
            $table->string('water_6')->nullable();
            $table->text('water_6v')->nullable();
            $table->string('water_7')->nullable();
            $table->text('water_7v')->nullable();
            $table->string('water_8')->nullable();
            $table->text('water_8v')->nullable();
            $table->string('water_9')->nullable();
            $table->text('water_9v')->nullable();
            $table->string('water_10')->nullable();
            $table->text('water_10v')->nullable();
            $table->string('water_11')->nullable();
            $table->text('water_11v')->nullable();
            $table->text('water_12')->nullable();
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
        Schema::dropIfExists('water_questions');
    }
};
