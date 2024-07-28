<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaterQuestions;

class WaterQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('water-questions');
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
        $supplyQuestion = new WaterQuestions();
        $supplyQuestion->category = $request->input('category');
        $supplyQuestion->activity = $request->input('activity');
        $supplyQuestion->water_1 = $request->input('water_1');
        $supplyQuestion->water_1v = $request->input('water_1v');
        $supplyQuestion->water_2 = $request->input('water_2');
        $supplyQuestion->water_2v = $request->input('water_2v');
        $supplyQuestion->water_3 = $request->input('water_3');
        $supplyQuestion->water_3v = $request->input('water_3v');
        $supplyQuestion->water_4 = $request->input('water_4');
        $supplyQuestion->water_4v = $request->input('water_4v');
        $supplyQuestion->water_5 = $request->input('water_5');
        $supplyQuestion->water_5v = $request->input('water_5v');
        $supplyQuestion->water_6 = $request->input('water_6');
        $supplyQuestion->water_6v = $request->input('water_6v');
        $supplyQuestion->water_7 = $request->input('water_7');
        $supplyQuestion->water_7v = $request->input('water_7v');
        $supplyQuestion->water_8 = $request->input('water_8');
        $supplyQuestion->water_8v = $request->input('water_8v');
        $supplyQuestion->water_9 = $request->input('water_9');
        $supplyQuestion->water_9v = $request->input('water_9v');
        $supplyQuestion->water_10 = $request->input('water_10');
        $supplyQuestion->water_10v = $request->input('water_10v');
        $supplyQuestion->water_11 = $request->input('water_11');
        $supplyQuestion->water_11v = $request->input('water_11v');
        $supplyQuestion->water_12 = $request->input('water_12');
        $supplyQuestion->details_added_by = Auth()->user()->id;

        $supplyQuestion->save();

        return response()->json(['success' => 'Data saved successfully']);
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
