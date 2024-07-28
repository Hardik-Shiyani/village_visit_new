<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupplyQuestion;

class SupplyQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('supply-questions');
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
        $supplyQuestion = new SupplyQuestion();
        $supplyQuestion->category = $request->input('category');
        $supplyQuestion->activity = $request->input('activity');
        $supplyQuestion->supply_1 = $request->input('supply_1');
        $supplyQuestion->supply_1v = $request->input('supply_1v');
        $supplyQuestion->supply_2 = $request->input('supply_2');
        $supplyQuestion->supply_2v = $request->input('supply_2v');
        $supplyQuestion->supply_3 = $request->input('supply_3');
        $supplyQuestion->supply_3v = $request->input('supply_3v');
        $supplyQuestion->supply_4 = $request->input('supply_4');
        $supplyQuestion->supply_5 = $request->input('supply_5');
        $supplyQuestion->supply_6 = $request->input('supply_6');
        $supplyQuestion->supply_7 = $request->input('supply_7');
        $supplyQuestion->supply_8 = $request->input('supply_8');
        $supplyQuestion->supply_8v = $request->input('supply_8v');
        $supplyQuestion->supply_9 = $request->input('supply_9');
        $supplyQuestion->supply_10 = $request->input('supply_10');
        $supplyQuestion->supply_10v = $request->input('supply_10v');
        $supplyQuestion->supply_11 = $request->input('supply_11');
        $supplyQuestion->supply_11v = $request->input('supply_11v');
        $supplyQuestion->supply_12 = $request->input('supply_12');
        $supplyQuestion->details_added_by = $request->input('details_added_by');

        if ($request->hasFile('villagephoto')) {
            $file = $request->file('villagephoto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $filename, 'public');
            $supplyQuestion->village_photo = $filePath;
        }
        
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
