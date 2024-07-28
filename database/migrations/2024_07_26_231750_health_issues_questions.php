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
            $table->longtext('taluka_name');
            $table->longtext('village_name');
            $table->longtext('health_1')->nullable();
            $table->longtext('health_1v')->nullable();
            $table->longtext('health_2')->nullable();
            $table->longtext('health_2v')->nullable();
            $table->longtext('phcchcsj')->nullable();
            $table->longtext('health_3')->nullable();
            $table->longtext('health_3v')->nullable();
            $table->longtext('health_4')->nullable();
            $table->longtext('health_4v')->nullable();
            $table->longtext('health_5')->nullable();
            $table->longtext('health_5v')->nullable();
            $table->longtext('health_6')->nullable();
            $table->longtext('health_6v')->nullable();
            $table->longtext('health_7v1')->nullable();
            $table->longtext('health_7v2')->nullable();
            $table->longtext('health_7v3')->nullable();
            $table->longtext('health_8')->nullable();
            $table->longtext('health_8v')->nullable();
            $table->longtext('health_9')->nullable();
            $table->longtext('health_10')->nullable();
            $table->longtext('health_11')->nullable();
            $table->longtext('health_12')->nullable();
            $table->longtext('health_13')->nullable();
            $table->longtext('health_13v')->nullable();
            $table->longtext('health_14')->nullable();
            $table->longtext('health_15_1')->nullable();
            $table->longtext('health_15_2')->nullable();
            $table->longtext('health_15_3')->nullable();
            $table->longtext('health_16')->nullable();
            $table->longtext('health_17_1')->nullable();
            $table->longtext('health_17_2')->nullable();
            $table->longtext('health_17_3')->nullable();
            $table->longtext('health_18_1')->nullable();
            $table->longtext('health_18_2')->nullable();
            $table->longtext('health_18_3')->nullable();
            $table->longtext('health_19')->nullable();
            $table->longtext('health_20')->nullable();
            $table->longtext('health_21')->nullable();
            $table->longtext('health_22')->nullable();
            $table->longtext('health_23')->nullable();
            $table->longtext('health_24')->nullable();
            $table->longtext('health_25')->nullable();
            $table->longtext('health_26')->nullable();
            $table->longtext('health_27')->nullable();
            $table->longtext('health_27v')->nullable();
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
            $table->string('health_35')->nullable();
            $table->string('health_36')->nullable();
            $table->string('health_36v')->nullable();
            $table->string('health_37')->nullable();
            $table->string('health_38')->nullable();
            $table->string('health_38v')->nullable();
            $table->string('health_39')->nullable();
            $table->string('health_40')->nullable();
            $table->string('health_40v')->nullable();
            $table->string('health_41')->nullable();
            $table->string('health_42')->nullable();
            $table->string('health_42v')->nullable();
            $table->string('health_43')->nullable();
            $table->string('health_44')->nullable();
            $table->string('health_44v')->nullable();
            $table->string('health_45')->nullable();
            $table->string('health_45v')->nullable();
            $table->string('health_46')->nullable();
            $table->string('health_46v')->nullable();
            $table->string('health_47')->nullable();
            $table->string('health_47v')->nullable();
            $table->string('PHCphoto')->nullable();
            $table->string('health_48v')->nullable();
            $table->longtext('details_added_by')->nullable();
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
