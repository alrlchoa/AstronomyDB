<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelationController extends Controller
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

    /**
     * Adds relation to the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function relation($id)
    {
        $cb = CelestialBody::find($id);

        if (is_null($cb)){
            return null;
        }
        $comet = Comet::find($id);
        $galaxy = Galaxy::find($id);
        $moon = Moon::find($id);
        $planet = Planet::find($id);
        $star = Star::find($id);

        if (!is_null($comet)){
            return view('cb.relation')->withCb($cb)->withComet($comet);
        }else if (!is_null($galaxy)){
            return view('cb.relation')->withCb($cb)->withGalaxy($galaxy);
        }else if(!is_null($moon)){
            $planet= Planet::find($moon->planet_id);
            return view('cb.relation')->withCb($cb)->withMoon($moon)->withPlanetoid($planet);
        }else if(!is_null($planet)){
            return view('cb.relation')->withCb($cb)->withPlanet($planet);
        }else if(!is_null($star)){
            $spectral = SpectralBrightness::find($star->spectral_brightness_id);
            return view('cb.relation')->withCb($cb)->withStar($star)->withSpectral($spectral);
        }
        return view('cb.relation')->withCb($cb);
    }
}
