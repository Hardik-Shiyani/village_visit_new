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
        Schema::create('electric_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category')->nullable();
            $table->string('activity')->nullable();
            $table->string('electric_1')->nullable();
            $table->text('electric_1v')->nullable();
            $table->string('electric_2')->nullable();
            $table->text('electric_2v')->nullable();
            $table->string('electric_3')->nullable();
            $table->text('electric_3v')->nullable();
            $table->text('electric_4')->nullable();
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
        Schema::dropIfExists('electric_questions');
    }
};
