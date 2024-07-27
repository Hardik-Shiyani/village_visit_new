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
        Schema::create('other_issues', function (Blueprint $table) {
            $table->id();
            $table->string('taluka_name');
            $table->string('village_name');
            $table->enum('gas_pipeline', ['yes', 'no'])->nullable();
            $table->text('gas_pipeline_details')->nullable();
            $table->enum('gas_delivery', ['yes', 'no'])->nullable();
            $table->text('gas_delivery_details')->nullable();
            $table->enum('public_toilet_issue', ['yes', 'no'])->nullable();
            $table->text('public_toilet_details')->nullable();
            $table->enum('irrigation_water_issue', ['yes', 'no'])->nullable();
            $table->text('irrigation_water_details')->nullable();
            $table->enum('canal_incomplete', ['yes', 'no'])->nullable();
            $table->text('canal_incomplete_details')->nullable();
            $table->enum('new_canal_requirement', ['yes', 'no'])->nullable();
            $table->text('new_canal_requirement_details')->nullable();
            $table->enum('agriculture_issues', ['yes', 'no'])->nullable();
            $table->text('agriculture_issues_details')->nullable();
            $table->enum('government_scheme_info', ['yes', 'no'])->nullable();
            $table->text('government_scheme_info_details')->nullable();
            $table->enum('agriculture_subsidy_issue', ['yes', 'no'])->nullable();
            $table->text('agriculture_subsidy_issue_details')->nullable();
            $table->enum('animal_shelter_issue', ['yes', 'no'])->nullable();
            $table->text('animal_shelter_issue_details')->nullable();
            $table->enum('bus_stand_issue', ['yes', 'no'])->nullable();
            $table->text('bus_stand_issue_details')->nullable();
            $table->enum('route_demanded', ['yes', 'no'])->nullable();
            $table->text('route_demanded_details')->nullable();
            $table->enum('bus_stop_change_request', ['yes', 'no'])->nullable();
            $table->text('bus_stop_change_request_details')->nullable();
            $table->enum('aadhar_update_facility', ['yes', 'no'])->nullable();
            $table->text('aadhar_update_facility_details')->nullable();
            $table->enum('rainwater_harvesting_facility', ['yes', 'no'])->nullable();
            $table->text('rainwater_harvesting_facility_details')->nullable();
            $table->text('main_attraction_details')->nullable();
            $table->text('village_specialty_details')->nullable();
            $table->text('additional_presentation_details')->nullable();
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
        Schema::dropIfExists('other_issues');
    }
};
