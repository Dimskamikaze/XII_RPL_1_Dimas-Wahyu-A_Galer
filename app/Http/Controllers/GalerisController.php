<?php

namespace App\Http\Controllers;

use App\Models\galeris;
use Illuminate\Http\Request;

class GalerisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilapp()
    {
        return view('timeline');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\galeris  $galeris
     * @return \Illuminate\Http\Response
     */
    public function show(galeris $galeris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\galeris  $galeris
     * @return \Illuminate\Http\Response
     */
    public function edit(galeris $galeris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\galeris  $galeris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, galeris $galeris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\galeris  $galeris
     * @return \Illuminate\Http\Response
     */
    public function destroy(galeris $galeris)
    {
        //
    }
}
