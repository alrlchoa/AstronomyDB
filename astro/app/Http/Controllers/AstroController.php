<?php

namespace App\Http\Controllers;

use App\Astronomer;
use App\CelestialBody;
use App\ResearcherFellowship;
use Illuminate\Http\Request;

class AstroController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cb = Astronomer::findOrFail($id);
        if (is_null($cb)){
            return null;
        }
        $reasearcherFellowship = ResearcherFellowship::find($id);
        $celestialbody = CelestialBody::query()
              ->where('id', '=', $id)
              ->get();
        if (!is_null($reasearcherFellowship)){
            return view('astro.show')->withCb($cb)->withResearcherFellowship($reasearcherFellowship);
        }
        return view('astro.show')->withCb($cb)->withCelestialbody($celestialbody);
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
