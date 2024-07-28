<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewerQuestionFormData;

class SewerQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sewer-questions');
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
        $data = $request->all();

        SewerQuestionFormData::create([
            'taluka_name_sewer' => $data['category'] ?? null,
            'village_name_sewer' => $data['activity'] ?? null,
            'sewer_line_exists' => $data['sewer_1'] ?? null,
            'sewer_line_exists_details' => $data['sewer_1v'] ?? null,
            'new_sewer_line_needed' => $data['sewer_2'] ?? null,
            'new_sewer_line_needed_details' => $data['sewer_2v'] ?? null,
            'incomplete_sewer_line_completed' => $data['sewer_3'] ?? null,
            'incomplete_sewer_line_completed_details' => $data['sewer_3v'] ?? null,
            'sewer_line_cleaned_before_rain' => $data['sewer_4'] ?? null,
            'sewer_line_cleaned_before_rain_details' => $data['sewer_4v'] ?? null,
            'sewer_check_issues' => $data['sewer_5'] ?? null,
            'sewer_check_issues_details' => $data['sewer_5v'] ?? null,
            'sewer_and_water_lines_maintenance' => $data['sewer_6'] ?? null,
            'sewer_and_water_lines_maintenance_details' => $data['sewer_6v'] ?? null,
            'sewer_other_issues' => $data['sewer_7'] ?? null,
            'details_added_by' => Auth()->user()->id ?? null,
        ]);

        return response()->json(['message' => 'Data saved successfully'], 200);
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
