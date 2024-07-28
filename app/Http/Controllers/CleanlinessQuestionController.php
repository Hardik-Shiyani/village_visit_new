<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CleanlinessQuestionFormData;

class CleanlinessQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cleanliness-questions');
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
        CleanlinessQuestionFormData::create([
            'taluka_name_cleanliness' => $request->input('category'),
            'village_name_cleanliness' => $request->input('activity'),
            'door_to_door_collection_service' => $request->input('cleanliness_1'),
            'door_to_door_collection_service_details' => $request->input('cleanliness_1v'),
            'waste_disposal_frequency' => $request->input('cleanliness_2'),
            'waste_disposal_site' => $request->input('cleanliness_2v'),
            'daily_cleaning_service' => $request->input('cleanliness_3'),
            'daily_cleaning_service_details' => $request->input('cleanliness_3v'),
            'staff_for_cleanliness' => $request->input('cleanliness_4'),
            'vehicles_for_cleanliness' => $request->input('cleanliness_5'),
            'vehicles_for_cleanliness_details' => $request->input('cleanliness_6'),
            'cleanliness_other_issues' => $request->input('cleanliness_7'),
            'details_added_by' => Auth()->user()->id,
        ]);

        return response()->json(['message' => 'Data stored successfully']);
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
