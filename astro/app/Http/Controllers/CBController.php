<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\CelestialBody;
use App\Comet;
use App\Galaxy;
use App\Moon;
use App\Planet;
use App\Star;

class CBController extends Controller
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
        return view('cb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'declination' => 'required|unique:celestial_bodies|between:0,360',
            'right_ascension' => 'required|unique:celestial_bodies|between:0,360',
            'name' => 'max:40'
        ]);
        $cb = new CelestialBody;
        
        $requestData = $request->all();
        
        CelestialBody::create($requestData);
        
        return redirect('admin/celestial-bodies')->with('flash_message', 'Celestial Body added!');
    }

    /**
 * Remove the specified resource from storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function search(Request $request)
    {
        $this->validate($request, [
            'right_ascension' => 'required|min:0|max:360',
            'declination' => 'required|min:0|max:360']);

        $right_ascension = $request->input('right_ascension');
        $declination = $request->input('declination');
        $celestialbody = DB::table('celestial_bodies')
            ->select(DB::raw("*"))
            ->where('right_ascension', '=', $right_ascension)
            ->where('declination','=', $declination)
            ->get();

        return view('cb.search')->withCelestialbody($celestialbody);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchByThreshold(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|min:0']);

        $threshold = $request->input('amount');

        $cb_galaxy = DB::table('celestial_bodies')
            ->join('galaxies','celestial_bodies.id','=','galaxies.id')
            ->select('celestial_bodies.id','celestial_bodies.name','celestial_bodies.right_ascension','celestial_bodies.declination','galaxies.brightness','celestial_bodies.verified')
            ->get();

        $cb_star = DB::table('celestial_bodies')
            ->join('stars','celestial_bodies.id','=','stars.id')
            ->join('spectral_brightnesses','spectral_brightnesses.id','=','stars.spectral_brightness_id')
            ->select('celestial_bodies.id','celestial_bodies.name','celestial_bodies.right_ascension','celestial_bodies.declination','spectral_brightnesses.brightness','celestial_bodies.verified')
            //->union($cb_galaxy)
            //->where('spectral_brightnesses.brightness','>=',$threshold)
            ->get();




        return view('cb.searchByThreshold')->withUnioned($cb_star);
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

//    public function getSearch(){
//        return view('cb/search');
//    }

    
}
