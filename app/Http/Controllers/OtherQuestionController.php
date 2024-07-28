<?php

namespace App\Http\Controllers;
use App\Models\OtherQuestions;

use Illuminate\Http\Request;

class OtherQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('other-questions');
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
        $otherQuestion = new OtherQuestions();

        $otherQuestion->taluka_name = $request->input('category');
        $otherQuestion->village_name = $request->input('activity');
        $otherQuestion->gas_pipeline = $request->input('anotherthing_1');
        $otherQuestion->gas_pipeline_details = $request->input('anotherthing_1v');
        $otherQuestion->gas_delivery = $request->input('anotherthing_2');
        $otherQuestion->gas_delivery_details = $request->input('anotherthing_2v');
        $otherQuestion->public_toilet_issue = $request->input('anotherthing_3');
        $otherQuestion->public_toilet_details = $request->input('anotherthing_3v');
        $otherQuestion->irrigation_water_issue = $request->input('anotherthing_4');
        $otherQuestion->irrigation_water_details = $request->input('anotherthing_4v');
        $otherQuestion->canal_incomplete = $request->input('anotherthing_5');
        $otherQuestion->canal_incomplete_details = $request->input('anotherthing_5v');
        $otherQuestion->new_canal_requirement = $request->input('anotherthing_6');
        $otherQuestion->new_canal_requirement_details = $request->input('anotherthing_6v');
        $otherQuestion->agriculture_issues = $request->input('anotherthing_7');
        $otherQuestion->agriculture_issues_details = $request->input('anotherthing_7v');
        $otherQuestion->government_scheme_info = $request->input('anotherthing_8');
        $otherQuestion->government_scheme_info_details = $request->input('anotherthing_8v');
        $otherQuestion->agriculture_subsidy_issue = $request->input('anotherthing_9');
        $otherQuestion->agriculture_subsidy_issue_details = $request->input('anotherthing_9v');
        $otherQuestion->animal_shelter_issue = $request->input('anotherthing_10');
        $otherQuestion->animal_shelter_issue_details = $request->input('anotherthing_10v');
        $otherQuestion->bus_stand_issue = $request->input('anotherthing_11');
        $otherQuestion->bus_stand_issue_details = $request->input('anotherthing_11v');
        $otherQuestion->route_demanded = $request->input('anotherthing_12');
        $otherQuestion->route_demanded_details = $request->input('anotherthing_12v');
        $otherQuestion->bus_stop_change_request = $request->input('anotherthing_13');
        $otherQuestion->bus_stop_change_request_details = $request->input('anotherthing_13v');
        $otherQuestion->aadhar_update_facility = $request->input('anotherthing_14');
        $otherQuestion->aadhar_update_facility_details = $request->input('anotherthing_14v');
        $otherQuestion->rainwater_harvesting_facility = $request->input('anotherthing_15');
        $otherQuestion->rainwater_harvesting_facility_details = $request->input('anotherthing_15v');
        $otherQuestion->main_attraction_details = $request->input('anotherthing_18'); // Assuming anotherthing_18 maps to main_attraction_details
        $otherQuestion->additional_presentation_details = $request->input('additional_presentation_details'); // Assuming you want to include this field as well
        $otherQuestion->details_added_by = $request->input('details_added_by'); // Ensure this is included in the request

        if ($request->hasFile('anotherthing_16')) {
            $file = $request->file('anotherthing_16');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $filename, 'public');
            $otherQuestion->main_attraction_details = $filePath;
        }

        if ($request->hasFile('anotherthing_17')) {
            $file = $request->file('anotherthing_17');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $filename, 'public');
            $otherQuestion->village_specialty_details = $filePath;
        }

        $otherQuestion->save();

        return redirect()->back()->with('success', 'Record saved successfully.');
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
