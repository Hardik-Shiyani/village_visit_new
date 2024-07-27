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
        Schema::create('supply_questions', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('activity')->nullable();
            $table->string('supply_1')->nullable();
            $table->text('supply_1v')->nullable();
            $table->string('supply_2')->nullable();
            $table->text('supply_2v')->nullable();
            $table->string('supply_3')->nullable();
            $table->text('supply_3v')->nullable();
            $table->text('supply_4')->nullable();
            $table->text('supply_5')->nullable();
            $table->text('supply_6')->nullable();
            $table->text('supply_7')->nullable();
            $table->string('supply_8')->nullable();
            $table->text('supply_8v')->nullable();
            $table->text('supply_9')->nullable();
            $table->string('supply_10')->nullable();
            $table->text('supply_10v')->nullable();
            $table->string('supply_11')->nullable();
            $table->text('supply_11v')->nullable();
            $table->string('village_photo')->nullable();
            $table->text('supply_12')->nullable();
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
        Schema::dropIfExists('supply_questions');
    }
};
