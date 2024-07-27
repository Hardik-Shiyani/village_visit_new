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
        Schema::create('gam_ni_vigat', function (Blueprint $table) {
            $table->id();
            $table->string('taluka_name');
            $table->string('village_name');
            $table->string('total_population')->nullable();
            $table->string('sarpanch_name')->nullable();
            $table->string('sarpanch_mobile', 20)->nullable();
            $table->string('talati_name')->nullable();
            $table->string('talati_mobile', 20)->nullable();
            $table->string('vce_name')->nullable();
            $table->string('vce_mobile', 20)->nullable();
            $table->enum('phc_chc', ['Yes', 'No'])->nullable();
            $table->string('medical_officer_name')->nullable();
            $table->string('medical_officer_mobile', 20)->nullable();
            $table->string('aanganwadi_karyakarta_name1')->nullable();
            $table->string('aanganwadi_karyakarta_mobile1', 20)->nullable();
            $table->string('aanganwadi_karyakarta_name2')->nullable();
            $table->string('aanganwadi_karyakarta_mobile2', 20)->nullable();
            $table->string('aanganwadi_karyakarta_name3')->nullable();
            $table->string('aanganwadi_karyakarta_mobile3', 20)->nullable();
            $table->string('asha_worker_name1')->nullable();
            $table->string('asha_worker_mobile1', 20)->nullable();
            $table->string('asha_worker_name2')->nullable();
            $table->string('asha_worker_mobile2', 20)->nullable();
            $table->string('asha_worker_name3')->nullable();
            $table->string('asha_worker_mobile3', 20)->nullable();
            $table->string('vyajbibhav_dukan_name1')->nullable();
            $table->string('vyajbibhav_dukan_mobile1', 20)->nullable();
            $table->string('vyajbibhav_dukan_name2')->nullable();
            $table->string('vyajbibhav_dukan_mobile2', 20)->nullable();
            $table->string('vyajbibhav_dukan_name3')->nullable();
            $table->string('vyajbibhav_dukan_mobile3', 20)->nullable();
            $table->text('fps_cardholders_details')->nullable();
            $table->string('primary_school_name1')->nullable();
            $table->string('principal_name1')->nullable();
            $table->string('mobile_no1', 20)->nullable();
            $table->string('children_count1')->nullable();
            $table->string('primary_school_name2')->nullable();
            $table->string('principal_name2')->nullable();
            $table->string('mobile_no2', 20)->nullable();
            $table->string('children_count2')->nullable();
            $table->string('primary_school_name3')->nullable();
            $table->string('principal_name3')->nullable();
            $table->string('mobile_no3', 20)->nullable();
            $table->string('children_count3')->nullable();
            $table->string('milk_ass_pramukh_name')->nullable();
            $table->string('milk_ass_pramukh_mobile', 20)->nullable();
            $table->string('sahkari_mandli_pramukh_name')->nullable();
            $table->string('sahkari_mandli_pramukh_mobile', 20)->nullable();
            $table->enum('reshan_card', ['Yes', 'No'])->nullable();
            $table->string('reshan_card_remain_count')->nullable();
            $table->enum('aadhar_card', ['Yes', 'No'])->nullable();
            $table->string('aadhar_card_remain_count')->nullable();
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
        Schema::dropIfExists('gam_ni_vigat');
    }
};
