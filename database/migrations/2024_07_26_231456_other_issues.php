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
            $table->longtext('gas_pipeline', ['yes', 'no'])->nullable();
            $table->longtext('gas_pipeline_details')->nullable();
            $table->longtext('gas_delivery', ['yes', 'no'])->nullable();
            $table->longtext('gas_delivery_details')->nullable();
            $table->longtext('public_toilet_issue', ['yes', 'no'])->nullable();
            $table->longtext('public_toilet_details')->nullable();
            $table->longtext('irrigation_water_issue', ['yes', 'no'])->nullable();
            $table->longtext('irrigation_water_details')->nullable();
            $table->longtext('canal_incomplete', ['yes', 'no'])->nullable();
            $table->longtext('canal_incomplete_details')->nullable();
            $table->longtext('new_canal_requirement', ['yes', 'no'])->nullable();
            $table->longtext('new_canal_requirement_details')->nullable();
            $table->longtext('agriculture_issues', ['yes', 'no'])->nullable();
            $table->longtext('agriculture_issues_details')->nullable();
            $table->longtext('government_scheme_info', ['yes', 'no'])->nullable();
            $table->longtext('government_scheme_info_details')->nullable();
            $table->longtext('agriculture_subsidy_issue', ['yes', 'no'])->nullable();
            $table->longtext('agriculture_subsidy_issue_details')->nullable();
            $table->longtext('animal_shelter_issue', ['yes', 'no'])->nullable();
            $table->longtext('animal_shelter_issue_details')->nullable();
            $table->longtext('bus_stand_issue', ['yes', 'no'])->nullable();
            $table->longtext('bus_stand_issue_details')->nullable();
            $table->longtext('route_demanded', ['yes', 'no'])->nullable();
            $table->longtext('route_demanded_details')->nullable();
            $table->longtext('bus_stop_change_request', ['yes', 'no'])->nullable();
            $table->longtext('bus_stop_change_request_details')->nullable();
            $table->longtext('aadhar_update_facility', ['yes', 'no'])->nullable();
            $table->longtext('aadhar_update_facility_details')->nullable();
            $table->longtext('rainwater_harvesting_facility', ['yes', 'no'])->nullable();
            $table->longtext('rainwater_harvesting_facility_details')->nullable();
            $table->longtext('main_attraction_details')->nullable();
            $table->longtext('village_specialty_details')->nullable();
            $table->longtext('additional_presentation_details')->nullable();
            $table->string('details_added_by')->nullable();
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
