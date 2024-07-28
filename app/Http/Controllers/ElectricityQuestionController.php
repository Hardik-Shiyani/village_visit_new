<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElectricQuestion;

class ElectricityQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('electricity-questions');
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
        ElectricQuestion::create([
            'category' => $data['category'] ?? null,
            'activity' => $data['activity'] ?? null,
            'electric_1' => $data['electric_1'] ?? null,
            'electric_1v' => $data['electric_1v'] ?? null,
            'electric_2' => $data['electric_2'] ?? null,
            'electric_2v' => $data['electric_2v'] ?? null,
            'electric_3' => $data['electric_3'] ?? null,
            'electric_3v' => $data['electric_3v'] ?? null,
            'electric_4' => $data['electric_4'] ?? null,
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
