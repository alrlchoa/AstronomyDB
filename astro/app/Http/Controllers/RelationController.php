<?php

namespace App\Http\Controllers;

use App\Astronomer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\CelestialBody;
use App\Comet;
use App\Galaxy;
use App\Moon;
use App\Planet;
use App\Star;
use App\SpectralBrightness;
use Session;

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
        $this->validate($request, [
            'parent_id' => 'required'
        ]);

        switch($request->parent_type){
            
            case 1:
                $this->validate($request, [
                    'parent_id' => 'required|exists:comets,id',
                    'star_id' =>  'required|exists:stars,id|existsWith:comet_star,parent_id,parent_type'
                    
                ]);
                $comet_id = $request->parent_id;
                $star_id = $request->star_id;
                $relationship = DB::table('comet_star')
                    ->insert(['comet_id' => $comet_id, 'star_id' => $star_id]);

                break;        

            case 4:
                $this->validate($request, [
                    'parent_id' => 'required|exists:planets,id',
                    'star_id' =>  'required|exists:stars,id|existsWith:planet_star,parent_id,parent_type'

                ]);
                $planet_id = $request->parent_id;
                $star_id = $request->star_id;
                $relationship = DB::table('planet_star')
                    ->insert(['planet_id' => $planet_id, 'star_id' => $star_id]);

                break;

            case 5:
                $this->validate($request, [
                    'parent_id' => 'required|exists:stars,id',
                ]);

            
                if($request->child_type == 1){
                    $this->validate($request, [
                    'comet_id' => 'required|exists:comets,id|existsWith:comet_star,parent_id,parent_type',
                ]);
                    $comet_id = $request->comet_id;
                    $star_id = $request->parent_id;
                    $relationship = DB::table('comet_star')
                        ->insert(['comet_id' => $comet_id, 'star_id' => $star_id]);

                }else if($request->child_type == 4){
                    $this->validate($request, [
                    'planet_id' => 'required|exists:planets,id|existsWith:planet_star,parent_id,parent_type',
                ]);
                        $planet_id = $request->planet_id;
                        $star_id = $request->parent_id;
                        $relationship = DB::table('planet_star')
                            ->insert(['planet_id' => $planet_id, 'star_id' => $star_id]);
                    }
            
                break;

            default:
                $this->validate($request, [
                    'parent_id' => 'between:0,6'
                ]);
        }

        Session::flash('success', 'Relationship was added correctly.');

            return redirect()->action('PagesController@getIndex');
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
            return view('rel.relation')->withCb($cb)->withComet($comet);
        }else if (!is_null($galaxy)){
            return view('rel.relation')->withCb($cb)->withGalaxy($galaxy);
        }else if(!is_null($moon)){
            $planet= Planet::find($moon->planet_id);
            return view('rel.relation')->withCb($cb)->withMoon($moon)->withPlanetoid($planet);
        }else if(!is_null($planet)){
            return view('rel.relation')->withCb($cb)->withPlanet($planet);
        }else if(!is_null($star)){
            $spectral = SpectralBrightness::find($star->spectral_brightness_id);
            return view('rel.relation')->withCb($cb)->withStar($star)->withSpectral($spectral);
        }
        return view('rel.relation')->withCb($cb);
    }
}
