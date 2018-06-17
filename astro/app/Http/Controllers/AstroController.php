<?php

namespace App\Http\Controllers;

use App\Astronomer;
use App\Institution;
use App\CelestialBody;
use App\ResearcherFellowship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $astronomer = Astronomer::find($id);
        if (is_null($astronomer)){
            return null;
        }
        $reasearcherFellowship = ResearcherFellowship::find($id);
        $institution = null;
        if($reasearcherFellowship){
            $institution = Institution::find($reasearcherFellowship->institution_id);
        }
        $celestialbody = DB::table('celestial_bodies')->where('id', $id)  //Implement properly when pivot table discovers is present
              ->get();
        return view('astro.show')->withAstronomer($astronomer)->withInstitution($institution)->withCelestialbody($celestialbody);
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

    /**
     * Searches by  Username
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function searchByUser(Request $request){

        $this->validate($request, [
            'username' => 'required'
        ]);
        $username = $request->username;

        $astronomer = DB::table('astronomers')->where('username', $username)
            ->leftJoin('researcher_fellowships', 'astronomers.id', '=', 'researcher_fellowships.id')
            ->leftJoin('institutions', 'researcher_fellowships.institution_id', '=', 'institutions.id')
            ->select('astronomers.id as id', 'astronomers.first_name as first_name', 'astronomers.last_name as last_name', 'astronomers.username as username', 'institutions.name as name')
            ->get();
        $count = $astronomer->count();
        return view('astro.userOutput')->withAstronomer($astronomer)->withCount($count);
    }

    /**
     * Searches by  Institution
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchByInstitution(Request $request){

        $this->validate($request, [
            'name' => 'required|exists:institutions,name'
        ]);

        $institution = DB::table('institutions')->where('name',$request->name)
            ->pluck('id')->toArray();
        
        $institutionID = $institution[0];
        
        $astronomers = DB::table('researcher_fellowships')->where('institution_id', $institutionID)
            ->leftJoin('astronomers', 'researcher_fellowships.id', '=', 'astronomers.id')
            ->leftJoin('institutions', 'researcher_fellowships.institution_id', '=', 'institutions.id')
            ->select('astronomers.id as id', 'astronomers.first_name as first_name', 'astronomers.last_name as last_name', 'astronomers.username as username', 'institutions.name as name')
            ->get();

        $count = $astronomers->count();
        return view('astro.userOutput')->withAstronomer($astronomers)->withCount($count);
    }
}
