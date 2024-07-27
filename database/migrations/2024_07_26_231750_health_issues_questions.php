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
        Schema::create('health_issue_questions', function (Blueprint $table) {
            $table->id();
            $table->string('taluka_name');
            $table->string('village_name');
            $table->string('health_1')->nullable();
            $table->string('health_1v')->nullable();
            $table->string('health_2')->nullable();
            $table->string('health_2v')->nullable();
            $table->string('phcchcsj')->nullable();
            $table->string('health_3')->nullable();
            $table->string('health_3v')->nullable();
            $table->string('health_4')->nullable();
            $table->string('health_4v')->nullable();
            $table->string('health_5')->nullable();
            $table->string('health_5v')->nullable();
            $table->string('health_6')->nullable();
            $table->string('health_6v')->nullable();
            $table->string('health_7v1')->nullable();
            $table->string('health_7v2')->nullable();
            $table->string('health_7v3')->nullable();
            $table->string('health_8')->nullable();
            $table->string('health_8v')->nullable();
            $table->string('health_9')->nullable();
            $table->string('health_10')->nullable();
            $table->string('health_11')->nullable();
            $table->string('health_12')->nullable();
            $table->string('health_13')->nullable();
            $table->string('health_13v')->nullable();
            $table->string('health_14')->nullable();
            $table->string('health_15_1')->nullable();
            $table->string('health_15_2')->nullable();
            $table->string('health_15_3')->nullable();
            $table->string('health_16')->nullable();
            $table->string('health_17_1')->nullable();
            $table->string('health_17_2')->nullable();
            $table->string('health_17_3')->nullable();
            $table->string('health_18_1')->nullable();
            $table->string('health_18_2')->nullable();
            $table->string('health_18_3')->nullable();
            $table->string('health_19')->nullable();
            $table->string('health_20')->nullable();
            $table->string('health_21')->nullable();
            $table->string('health_22')->nullable();
            $table->string('health_23')->nullable();
            $table->string('health_24')->nullable();
            $table->string('health_25')->nullable();
            $table->string('health_26')->nullable();
            $table->string('health_27')->nullable();
            $table->string('health_27v')->nullable();
            $table->string('health_28')->nullable();
            $table->string('health_28v')->nullable();
            $table->string('health_29')->nullable();
            $table->string('health_29v')->nullable();
            $table->string('health_30')->nullable();
            $table->string('health_30v')->nullable();
            $table->string('health_31')->nullable();
            $table->string('health_32')->nullable();
            $table->string('health_32p')->nullable();
            $table->string('health_32l')->nullable();
            $table->string('health_33')->nullable();
            $table->string('health_33s')->nullable();
            $table->string('health_332d')->nullable();
            $table->string('health_34')->nullable();
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
        Schema::dropIfExists('health_issue_questions');
    }
};
