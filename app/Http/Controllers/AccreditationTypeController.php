<?php

namespace App\Http\Controllers;

use App\AccreditationType;
use Illuminate\Http\Request;

class AccreditationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accreditationTypes = AccreditationType::all()->toArray();
        return array_reverse($accreditationTypes);
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
        $accreditationType = new AccreditationType(array(
            'title' => $request->input('title'),
            'description' =>$request->input('description')

        ));
        $accreditationType->save();

        return response()->json("Successfully added");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AccreditationType  $accreditationType
     * @return \Illuminate\Http\Response
     */
    public function show(AccreditationType $accreditationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AccreditationType  $accreditationType
     * @return \Illuminate\Http\Response
     */
    public function edit(AccreditationType $accreditationType)
    {
        
      //  $accreditationType = AccreditationType::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AccreditationType  $accreditationType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccreditationType $accreditationType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AccreditationType  $accreditationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccreditationType $accreditationType)
    {
        //
    }
}
