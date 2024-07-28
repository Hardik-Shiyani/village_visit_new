<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yojano;

class YojanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('yojano');
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
        $yojano = new Yojano();
        $yojano->vruddha_niradhar_count = $request->vruddhaniradhar_count;
        $yojano->vruddha_niradhar_remarks = $request->vruddhaniradhar_remarks;
        $yojano->widow_count = $request->widow_count;
        $yojano->widow_remarks = $request->widow_remarks;
        $yojano->sankatmochan_count = $request->sankatmochan_count;
        $yojano->sankatmochan_remarks = $request->sankatmochan_remarks;
        $yojano->nfsa_count = $request->nfsa_count;
        $yojano->nfsa_remarks = $request->nfsa_remarks;
        $yojano->pm_jivan_suraksha_count = $request->pjsy_count;
        $yojano->pm_jivan_suraksha_remarks = $request->pjsy_remarks;
        $yojano->pm_jivanjyot_vima_count = $request->pjjvy_count;
        $yojano->pm_jivanjyot_vima_remarks = $request->pjjvy_remarks;
        $yojano->ayushman_bharat_count = $request->aby_count;
        $yojano->ayushman_bharat_remarks = $request->aby_remarks;
        $yojano->janani_suraksha_count = $request->jsy_count;
        $yojano->janani_suraksha_remarks = $request->jsy_remarks;
        $yojano->pm_matru_vandana_count = $request->pmvy_count;
        $yojano->pm_matru_vandana_remarks = $request->pmvy_remarks;
        $yojano->nishay_poshan_count = $request->npy_count;
        $yojano->nishay_poshan_remarks = $request->npy_remarks;
        $yojano->kasturba_poshan_count = $request->kpsy_count;
        $yojano->kasturba_poshan_remarks = $request->kpsy_remarks;
        $yojano->k_mameru_count = $request->kmsy_count;
        $yojano->k_mameru_remarks = $request->kmsy_remarks;
        $yojano->divyang_pass_count = $request->dvp_count;
        $yojano->divyang_pass_remarks = $request->dvp_remarks;
        $yojano->vhali_dikri_count = $request->vdy_count;
        $yojano->vhali_dikri_remarks = $request->vdy_remarks;
        $yojano->vaid_sahay_count = $request->vsy_count;
        $yojano->vaid_sahay_remarks = $request->vsy_remarks;
        $yojano->gandhi_pansion_count = $request->ignspy_count;
        $yojano->gandhi_pansion_remarks = $request->ignspy_remarks;
        $yojano->sukanya_samruddhi_count = $request->ssy_count;
        $yojano->sukanya_samruddhi_remarks = $request->ssy_remarks;
        $yojano->pm_awaas_count = $request->pay_count;
        $yojano->pm_awaas_remarks = $request->pay_remarks;
        $yojano->pm_kisan_count = $request->pkpy_count;
        $yojano->pm_kisan_remarks = $request->pkpy_remarks;
        $yojano->pm_joy_count = $request->pjy_count;
        $yojano->pm_joy_remarks = $request->pjy_remarks;
        $yojano->disability_pansion_count = $request->dps_count;
        $yojano->disability_pansion_remarks = $request->dps_remarks;
        $yojano->details_added_by = Auth()->user()->id;
        $yojano->save();

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
