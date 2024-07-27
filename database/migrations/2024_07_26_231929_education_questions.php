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
        Schema::create('education_questions', function (Blueprint $table) {
            $table->id();
            $table->string('taluka_name')->nullable();
            $table->string('village_name')->nullable();
            $table->string('teachers_available')->nullable();
            $table->string('computer_lab')->nullable();
            $table->text('computer_lab_details')->nullable();
            $table->string('computer_usage')->nullable();
            $table->text('computer_usage_details')->nullable();
            $table->string('computer_lab_photo')->nullable(); // Assuming file paths or URLs are stored
            $table->string('computers_working')->nullable();
            $table->text('computers_working_details')->nullable();
            $table->string('smart_class')->nullable();
            $table->text('smart_class_details')->nullable();
            $table->string('smart_class_usage')->nullable();
            $table->text('smart_class_usage_details')->nullable();
            $table->string('mid_day_meal_query')->nullable();
            $table->text('mid_day_meal_details')->nullable();
            $table->string('building_condition')->nullable();
            $table->text('building_condition_details')->nullable();
            $table->integer('number_of_rooms')->nullable();
            $table->string('playground')->nullable();
            $table->text('playground_details')->nullable();
            $table->string('laboratory_management')->nullable();
            $table->text('laboratory_management_details')->nullable();
            $table->string('library')->nullable();
            $table->text('library_details')->nullable();
            $table->string('drinking_water_management')->nullable();
            $table->text('drinking_water_management_details')->nullable();
            $table->string('toilet_condition')->nullable();
            $table->text('toilet_condition_details')->nullable();
            $table->text('teacher_student_attendance_details')->nullable();
            $table->text('grade')->nullable();
            $table->integer('total_students')->nullable();
            $table->integer('present_students')->nullable();
            $table->integer('boys')->nullable();
            $table->integer('girls')->nullable();
            $table->integer('total')->nullable();
            $table->string('smart_class_functionality')->nullable();
            $table->text('smart_class_functionality_details')->nullable();
            $table->string('iron_folic_acid_tablets')->nullable();
            $table->text('iron_folic_acid_last_date')->nullable();
            $table->text('sickle_cell_anemia_test_details')->nullable();
            $table->text('health_checkup_by_phc')->nullable();
            $table->integer('primary_schools')->nullable();
            $table->integer('secondary_schools')->nullable();
            $table->string('building_dilapidation')->nullable();
            $table->text('building_dilapidation_details')->nullable();
            $table->string('new_building_request')->nullable();
            $table->text('new_building_request_details')->nullable();
            $table->string('sanitary_napkins_for_girls')->nullable();
            $table->text('sanitary_napkins_details')->nullable();
            $table->text('lab_experiments_details')->nullable();
            $table->string('mdm_shed_availability')->nullable();
            $table->text('mdm_shed_details')->nullable();
            $table->integer('number_of_classrooms')->nullable();
            $table->string('separate_toilets_for_boys_girls')->nullable();
            $table->text('separate_toilets_details')->nullable();
            $table->text('drinking_water_details')->nullable();
            $table->string('cctv_availability')->nullable();
            $table->text('cctv_details')->nullable();
            $table->string('smc_meetings_regular')->nullable();
            $table->text('smc_meetings_details')->nullable();
            $table->string('smc_register')->nullable();
            $table->text('smc_register_details')->nullable();
            $table->string('pta_meetings_regular')->nullable();
            $table->text('pta_meetings_details')->nullable();
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
        Schema::dropIfExists('education_questions');
    }
};
