<?php

namespace App\Http\Controllers;
use App\Models\GramPanchayaQuestions;

use Illuminate\Http\Request;

class GramPanchayatQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('grampanchayat-questions');
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
        $gramPanchayatQuestion = new GramPanchayaQuestions();

        // Handle the file upload
        if ($request->hasFile('grampanchayatphoto')) {
            $file = $request->file('grampanchayatphoto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $filename, 'public');
            $gramPanchayatQuestion->grampanchayatphoto = $filePath;
        }

        // Assign other fields from the request to the model
        $gramPanchayatQuestion->taluka_name = $request->input('category');
        $gramPanchayatQuestion->village_name = $request->input('activity');
        $gramPanchayatQuestion->grampanchayat_1 = $request->input('grampanchayat_1');
        $gramPanchayatQuestion->grampanchayat_1v = $request->input('grampanchayat_1v');
        $gramPanchayatQuestion->grampanchayat_2 = $request->input('grampanchayat_2');
        $gramPanchayatQuestion->grampanchayat_2v = $request->input('grampanchayat_2v');
        $gramPanchayatQuestion->grampanchayat_3 = $request->input('grampanchayat_3');
        $gramPanchayatQuestion->grampanchayat_3v = $request->input('grampanchayat_3v');
        $gramPanchayatQuestion->grampanchayat_4 = $request->input('grampanchayat_4');
        $gramPanchayatQuestion->grampanchayat_4v = $request->input('grampanchayat_4v');
        $gramPanchayatQuestion->grampanchayat_5 = $request->input('grampanchayat_5');
        $gramPanchayatQuestion->grampanchayat_5v = $request->input('grampanchayat_5v');
        $gramPanchayatQuestion->grampanchayat_6 = $request->input('grampanchayat_6');
        $gramPanchayatQuestion->grampanchayat_6v = $request->input('grampanchayat_6v');
        $gramPanchayatQuestion->grampanchayat_7 = $request->input('grampanchayat_7');
        $gramPanchayatQuestion->grampanchayat_8 = $request->input('grampanchayat_8');
        $gramPanchayatQuestion->grampanchayat_8v = $request->input('grampanchayat_8v');
        $gramPanchayatQuestion->grampanchayat_9 = $request->input('grampanchayat_9');
        $gramPanchayatQuestion->grampanchayat_9v = $request->input('grampanchayat_9v');
        $gramPanchayatQuestion->grampanchayat_10 = $request->input('grampanchayat_10');
        $gramPanchayatQuestion->grampanchayat_10v = $request->input('grampanchayat_10v');
        $gramPanchayatQuestion->health_48v = $request->input('health_48v');
        $gramPanchayatQuestion->details_added_by = Auth()->user()->id;

        $gramPanchayatQuestion->save();

        return response()->json([
            'message' => 'Record created successfully',
            'data' => $gramPanchayatQuestion
        ]);
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
