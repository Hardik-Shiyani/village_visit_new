<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoadQuestionFormData;

class RoadQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('road-questions');
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

        RoadQuestionFormData::create([
            'taluka_name' => $data['category'] ?? null,
            'village_name' => $data['activity'] ?? null,
            'cc_road_available' => $data['road_1'] ?? null,
            'cc_road_available_details' => $data['road_1v'] ?? null,
            'cc_road_needed' => $data['road_2'] ?? null,
            'cc_road_needed_details' => $data['road_2v'] ?? null,
            'road_connecting_to_school' => $data['road_3'] ?? null,
            'road_connecting_to_school_details' => $data['road_3v'] ?? null,
            'road_other_issues' => $data['road_4'] ?? null,
            'details_added_by' => $data['details_added_by'] ?? null,
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
