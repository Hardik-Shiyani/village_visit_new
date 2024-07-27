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
        Schema::create('revenue_questions_form_data', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('activity')->nullable();
            $table->string('revenue_1')->nullable();
            $table->text('revenue_1v')->nullable();
            $table->string('revenue_2')->nullable();
            $table->text('revenue_2v')->nullable();
            $table->string('revenue_3')->nullable();
            $table->text('revenue_3v')->nullable();
            $table->string('revenue_4')->nullable();
            $table->text('revenue_4v')->nullable();
            $table->string('revenue_5')->nullable();
            $table->text('revenue_5v')->nullable();
            $table->string('revenue_6')->nullable();
            $table->text('revenue_6v')->nullable();
            $table->string('revenue_7')->nullable();
            $table->text('revenue_7v')->nullable();
            $table->string('revenue_8')->nullable();
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
        Schema::dropIfExists('revenue_questions_form_data');
    }
};
