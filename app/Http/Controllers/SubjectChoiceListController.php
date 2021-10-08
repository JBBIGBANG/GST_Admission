<?php

namespace App\Http\Controllers;

use App\Models\SubjectChoiceList;
use Illuminate\Http\Request;

class SubjectChoiceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // $sub = new SubjectChoiceList();
        $adminPanels  = $request->input();
        $choice = array();
        $subject = array();
        $len= $request->input();
        dd($adminPanels);

        // for ($i=0; $i<$len; $i++) {
        //     echo $i;
        // }

        // if($request->list)


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubjectChoiceList  $subjectChoiceList
     * @return \Illuminate\Http\Response
     */
    public function show(SubjectChoiceList $subjectChoiceList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubjectChoiceList  $subjectChoiceList
     * @return \Illuminate\Http\Response
     */
    public function edit(SubjectChoiceList $subjectChoiceList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubjectChoiceList  $subjectChoiceList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubjectChoiceList $subjectChoiceList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubjectChoiceList  $subjectChoiceList
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubjectChoiceList $subjectChoiceList)
    {
        //
    }
}
