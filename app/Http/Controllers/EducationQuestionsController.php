<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationQuestions;

class EducationQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('education-questions');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $educationQuestion = new EducationQuestions();

        // Assign the request data to the model properties
        $educationQuestion->taluka_name = $request['category'];
        $educationQuestion->village_name = $request['activity'];
        $educationQuestion->teachers_available = $request['edu_1'];
        $educationQuestion->computer_lab = $request['edu_2'];
        $educationQuestion->computer_lab_details = $request['edu_2v'];
        $educationQuestion->computer_usage = $request['edu_3'];
        $educationQuestion->computer_usage_details = $request['edu_3v'];
        $educationQuestion->computer_lab_photo = $request['edu_4'];
        $educationQuestion->computers_working = $request['edu_4v'];
        $educationQuestion->computers_working_details = $request['edu_5'];
        $educationQuestion->smart_class = $request['edu_5v'];
        $educationQuestion->smart_class_details = $request['edu_6'];
        $educationQuestion->smart_class_usage = $request['edu_6v'];
        $educationQuestion->smart_class_usage_details = $request['edu_7'];
        $educationQuestion->mid_day_meal_query = $request['edu_7v'];
        $educationQuestion->mid_day_meal_details = $request['edu_8'];
        $educationQuestion->building_condition = $request['edu_8v'];
        $educationQuestion->building_condition_details = $request['edu_9'];
        $educationQuestion->number_of_rooms = $request['edu_10'];
        $educationQuestion->playground = $request['edu_10v'];
        $educationQuestion->playground_details = $request['edu_11'];
        $educationQuestion->laboratory_management = $request['edu_11v'];
        $educationQuestion->laboratory_management_details = $request['edu_12'];
        $educationQuestion->library = $request['edu_12v'];
        $educationQuestion->library_details = $request['edu_13'];
        $educationQuestion->drinking_water_management = $request['edu_13v'];
        $educationQuestion->drinking_water_management_details = $request['edu_14'];
        $educationQuestion->toilet_condition = $request['edu_14v'];
        $educationQuestion->toilet_condition_details = $request['edu_15'];
        $educationQuestion->teacher_student_attendance_details = $request['edu_15_1'];
        $educationQuestion->grade = $request['edu_15_2'];
        $educationQuestion->total_students = $request['edu_15_3'];
        $educationQuestion->present_students = $request['edu_15_4'];
        $educationQuestion->boys = $request['edu_15_5'];
        $educationQuestion->girls = $request['edu_15_6'];
        $educationQuestion->total = $request['edu_16'];
        $educationQuestion->smart_class_functionality = $request['edu_16v'];
        $educationQuestion->smart_class_functionality_details = $request['edu_17'];
        $educationQuestion->iron_folic_acid_tablets = $request['edu_18'];
        $educationQuestion->iron_folic_acid_last_date = $request['edu_19'];
        $educationQuestion->sickle_cell_anemia_test_details = $request['edu_20'];
        $educationQuestion->health_checkup_by_phc = $request['edu_20v'];
        $educationQuestion->primary_schools = $request['edu_21'];
        $educationQuestion->secondary_schools = $request['edu_21v'];
        $educationQuestion->building_dilapidation = $request['edu_22'];
        $educationQuestion->building_dilapidation_details = $request['edu_22v'];
        $educationQuestion->new_building_request = $request['edu_23'];
        $educationQuestion->new_building_request_details = $request['edu_24'];
        $educationQuestion->sanitary_napkins_for_girls = $request['edu_24v'];
        $educationQuestion->sanitary_napkins_details = $request['edu_25'];
        $educationQuestion->lab_experiments_details = $request['edu_26'];
        $educationQuestion->mdm_shed_availability = $request['edu_26v'];
        $educationQuestion->mdm_shed_details = $request['edu_27'];
        $educationQuestion->number_of_classrooms = $request['edu_27v'];
        $educationQuestion->separate_toilets_for_boys_girls = $request['edu_28'];
        $educationQuestion->separate_toilets_details = $request['edu_28v'];
        $educationQuestion->drinking_water_details = $request['edu_29'];
        $educationQuestion->cctv_availability = $request['edu_29v'];
        $educationQuestion->cctv_details = $request['edu_30'];
        $educationQuestion->smc_meetings_regular = $request['edu_30v'];
        $educationQuestion->smc_meetings_details = $request['edu_31'];
        $educationQuestion->smc_register = $request['edu_31v'];
        $educationQuestion->smc_register_details = $request['edu_32'];
        $educationQuestion->pta_meetings_regular = $request['edu_32v'];
        $educationQuestion->pta_meetings_details = $request['edu_33'];
        $educationQuestion->details_added_by = $request['edu_33v'];


        // Save the model to the database
        $educationQuestion->save();

        // Return a response or redirect as needed
        return response()->json([
            'message' => 'Education question created successfully!'
            // 'data' => $educationQuestion
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
