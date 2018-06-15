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
    public function store(Request $request){
        if (!$request->has('verified')) {
            $request->merge(['verified' => 0]);
        }
        $this->validate($request, [
            'declination' => 'required|between:0,360',
            'right_ascension' => 'required|between:0,360|uniqueRaD:declination',
            'name' => 'max:40',
        ]);

        $cb = new CelestialBody;
        $cb->right_ascension = $request->right_ascension;
        $cb->declination = $request->declination;
        $cb->name = $request->name;
        $cb->verified = $request->verified;  
              
        switch($request->cbtype){
            case 0:
                $cb->save();
                break;

            case 1:
                $this->validate($request, [
                    'comet_speed' => 'required|min:0'
                ]);
                $cb->save();
                $comet = new Comet;
                $comet->id = $cb->id;;
                $comet->speed = $request->comet_speed;
                $comet->save();
                break;

            case 2:
                $this->validate($request, [
                    'galaxy_brightness' => 'min:0'
                ]);
                $cb->save();
                $galaxy = new Galaxy;
                $galaxy->id = $cb->id;;
                $galaxy->brightness = $request->galaxy_brightness;
                $galaxy->redshift = $request->galaxy_redshift;
                $galaxy->type = $request->galaxy_type;
                $galaxy->save();
                break;

            case 3:
                $this->validate($request, [
                    'moon_period' => 'min:0',
			        'moon_radius' => 'min:0',
			        'moon_plid' => 'required|exists:planets,id'
                ]);
                $cb->save();
                $moon = new Moon;
                $moon->id = $cb->id;;
                $moon->orbital_period = $request->moon_period;
                $moon->radius = $request->moon_radius;
                $moon->planet_id = $request->moon_plid;
                $moon->save();
                break;

            case 4:
                $this->validate($request, [
                    'planet_period' => 'min:0',
                ]);
                $cb->save();
                $planet = new Planet;
                $planet->id = $cb->id;
                $planet->orbital_period = $request->planet_period;
                $planet->planet_type = $request->planet_type;
                $planet->save();
                break;

            case 5:
                $this->validate($request, [
                    'star_spectral' => 'exists:spectral_brightnesses,id',
                ]);
                $cb->save();
                $star = new Star;
                $star->id = $cb->id;
                $star->spectral_brightness_id = $request->star_spectral;
                $star->save();
                break;
            
            default:
                $this->validate($request, [
                    'cbtype' => 'between:0,6'
                ]);
        }

        Session::flash('success', 'Celestial Body was created correctly.');
        
        return redirect()->route('cb.show', $cb->id);
    }

    /**
 * Remove the specified resource from storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function search(Request $request){
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
    public function searchByThreshold(Request $request){
        $this->validate($request, [
            'amount' => 'required|min:0']);

        $threshold = $request->input('amount');

        if($request->has('ver')){
            $cb_galaxy = DB::table('celestial_bodies')
                ->join('galaxies', 'celestial_bodies.id', '=', 'galaxies.id')
                ->select('celestial_bodies.id', 'celestial_bodies.name', 'celestial_bodies.right_ascension', 'celestial_bodies.declination', 'galaxies.brightness')
                ->where('galaxies.brightness','>=',$threshold)
                ->get();

            $cb_star = DB::table('celestial_bodies')
                ->join('stars', 'celestial_bodies.id', '=', 'stars.id')
                ->join('spectral_brightnesses', 'spectral_brightnesses.id', '=', 'stars.spectral_brightness_id')
                ->select('celestial_bodies.id', 'celestial_bodies.name', 'celestial_bodies.right_ascension', 'celestial_bodies.declination', 'spectral_brightnesses.brightness')
                ->where('spectral_brightnesses.brightness','>=',$threshold)
                ->get();
        }else {
            $cb_galaxy = DB::table('celestial_bodies')
                ->join('galaxies', 'celestial_bodies.id', '=', 'galaxies.id')
                ->select('celestial_bodies.id', 'celestial_bodies.name', 'celestial_bodies.right_ascension', 'celestial_bodies.declination', 'galaxies.brightness', 'celestial_bodies.verified')
                ->where('galaxies.brightness','>=',$threshold)
                ->where('celestial_bodies.verified','=',1)
                ->get();

            $cb_star = DB::table('celestial_bodies')
                ->join('stars', 'celestial_bodies.id', '=', 'stars.id')
                ->join('spectral_brightnesses', 'spectral_brightnesses.id', '=', 'stars.spectral_brightness_id')
                ->select('celestial_bodies.id', 'celestial_bodies.name', 'celestial_bodies.right_ascension', 'celestial_bodies.declination', 'spectral_brightnesses.brightness', 'celestial_bodies.verified')
                ->where('spectral_brightnesses.brightness', '>=', $threshold)
                ->where('celestial_bodies.verified','=',1)
                ->get();
        }
        $celestialbody = $cb_star->merge($cb_galaxy);
        return view('cb.search')->withCelestialbody($celestialbody);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchByType(Request $request){
        $this->validate($request, [
            'comet' => 'required_without_all:star,planet,moon,galaxy,none',
            'star' => 'required_without_all:comet,planet,moon,galaxy,none',
            'planet' => 'required_without_all:comet,star,moon,galaxy,none',
            'moon' => 'required_without_all:comet,star,planet,galaxy,none',
            'galaxy' => 'required_without_all:comet,star,planet,moon,none',
            'none' => 'required_without_all:comet,star,planet,moon,galaxy',
        ]);

        $celestialbody = new \Illuminate\Database\Eloquent\Collection;
        $array = $request->all();
        $comet = null;
        $star = null;
        $planet = null;
        $moon = null;
        $galaxy = null;
        $none = null;

        if($request->has('ver')) {
            if (array_has($array, 'comet')) {
                $comet = Comet::query()
                    ->select(DB::raw("*"))
                    ->join('celestial_bodies', 'comets.id', '=', 'celestial_bodies.id')
                    ->get();
                $celestialbody = $celestialbody->merge($comet);
            }
            if (array_has($array, 'star')) {
                $star = Star::query()
                    ->select(DB::raw("*"))
                    ->join('celestial_bodies', 'stars.id', '=', 'celestial_bodies.id')
                    ->get();
                $celestialbody = $celestialbody->merge($star);

            }
            if (array_has($array, 'planet')) {
                $planet = Planet::query()
                    ->select(DB::raw("*"))
                    ->join('celestial_bodies', 'planets.id', '=', 'celestial_bodies.id')
                    ->get();
                $celestialbody = $celestialbody->merge($planet);

            }
            if (array_has($array, 'moon')) {
                $moon = Moon::query()
                    ->select(DB::raw("*"))
                    ->join('celestial_bodies', 'moons.id', '=', 'celestial_bodies.id')
                    ->get();
                $celestialbody = $celestialbody->merge($moon);

            }
            if (array_has($array, 'galaxy')) {
                $galaxy = Galaxy::query()
                    ->select(DB::raw("*"))
                    ->join('celestial_bodies', 'galaxies.id', '=', 'celestial_bodies.id')
                    ->get();
                $celestialbody = $celestialbody->merge($galaxy);

            }
            if (array_has($array, 'none')) {
                $none = CelestialBody::query()
                    ->select(DB::raw("*"))
                    ->get();
                $celestialbody = $celestialbody->merge($none);
            }
//            if(!$request->has('ver')) {
//                $celestialbody = $celestialbody->where('celestial_bodies.verified','=', 1);
//            }
        }else{
            if (array_has($array, 'comet')) {
                $comet = Comet::query()
                    ->join('celestial_bodies', 'comets.id', '=', 'celestial_bodies.id')
                    ->where('celestial_bodies.verified','=',1)
                    ->get();
                $celestialbody = $celestialbody->merge($comet);

            }
            if (array_has($array, 'star')) {
                $star = Star::query()
                    ->join('celestial_bodies', 'stars.id', '=', 'celestial_bodies.id')
                    ->where('celestial_bodies.verified','=',1)
                    ->get();
                $celestialbody = $celestialbody->merge($star);

            }
            if (array_has($array, 'planet')) {
                $planet = Planet::query()
                    ->join('celestial_bodies', 'planets.id', '=', 'celestial_bodies.id')
                    ->where('celestial_bodies.verified','=',1)
                    ->get();
                $celestialbody = $celestialbody->merge($planet);
            }
            if (array_has($array, 'moon')) {
                $moon = Moon::query()
                    ->join('celestial_bodies', 'moons.id', '=', 'celestial_bodies.id')
                    ->where('celestial_bodies.verified','=',1)
                    ->get();
                $celestialbody = $celestialbody->merge($moon);
            }
            if (array_has($array, 'galaxy')) {
                $galaxy = Galaxy::query()
                    ->join('celestial_bodies', 'galaxies.id', '=', 'celestial_bodies.id')
                    ->where('celestial_bodies.verified','=',1)
                    ->get();
                $celestialbody = $celestialbody->merge($galaxy);
            }
            if (array_has($array, 'none')) {
                $none = CelestialBody::query()
                    ->where('celestial_bodies.verified','=',1)
                    ->get();
                $celestialbody = $celestialbody->merge($none);

            }

        }
        return view('cb.search')->withCelestialbody($celestialbody);

    }


    /**
     * Searches by Specific ID
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchID(Request $request){
        $this->validate($request, [
            'id' => 'required|exists:celestial_bodies,id'
            ]);

        $id = $request->id;
        $celestialbody = DB::table('celestial_bodies')
            ->where('id', '=', $id)
            ->get();

        return view('cb.search')->withCelestialbody($celestialbody);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cb = CelestialBody::findOrFail($id);
        if (is_null($cb)){
            return null;
        }

        $comet = Comet::find($id);
        $galaxy = Galaxy::find($id);
        $moon = Moon::find($id);
        $planet = Planet::find($id);
        $star = Star::find($id);

        if (!is_null($comet)){
            return view('cb.show')->withCb($cb)->withComet($comet);
        }else if (!is_null($galaxy)){
            return view('cb.show')->withCb($cb)->withGalaxy($galaxy);
        }else if(!is_null($moon)){
            $planet= Planet::find($moon->planet_id);
            return view('cb.show')->withCb($cb)->withMoon($moon)->withPlanetoid($planet);
        }else if(!is_null($planet)){
            return view('cb.show')->withCb($cb)->withPlanet($planet);
        }else if(!is_null($star)){
            $spectral = SpectralBrightness::find($star->spectral_brightness_id);
            return view('cb.show')->withCb($cb)->withStar($star)->withSpectral($spectral);
        }
        return view('cb.show')->withCb($cb);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
            return view('cb.edit')->withCb($cb)->withComet($comet);
        }else if (!is_null($galaxy)){
            return view('cb.edit')->withCb($cb)->withGalaxy($galaxy);
        }else if(!is_null($moon)){
            $planet= Planet::find($moon->planet_id);
            return view('cb.edit')->withCb($cb)->withMoon($moon)->withPlanetoid($planet);
        }else if(!is_null($planet)){
            return view('cb.edit')->withCb($cb)->withPlanet($planet);
        }else if(!is_null($star)){
            $spectral = SpectralBrightness::find($star->spectral_brightness_id);
            return view('cb.edit')->withCb($cb)->withStar($star)->withSpectral($spectral);
        }
        return view('cb.edit')->withCb($cb);
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!$request->has('verified')) {
            $request->merge(['verified' => 0]);
        }

        $this->validate($request, [
            'declination' => 'required|between:0,360',
            'right_ascension' => 'required|between:0,360|uniqueRaDUp:declination,id',
            'name' => 'max:40',
        ]);
        $cb = CelestialBody::find($id);
        $cb->right_ascension = $request->right_ascension;
        $cb->declination = $request->declination;
        $cb->name = $request->name;
        $cb->verified = $request->verified;

        switch($request->cbtype){
            case 0:
                $cb->save();
                break;

            case 1:
                $this->validate($request, [
                    'comet_speed' => 'required|min:0'
                ]);
                $cb->save();
                $comet = Comet::find($cb->id);
                $comet->speed = $request->comet_speed;
                $comet->save();
                break;

            case 2:
                $this->validate($request, [
                    'galaxy_brightness' => 'min:0'
                ]);
                $cb->save();
                $galaxy = Galaxy::find($cb->id);
                $galaxy->brightness = $request->galaxy_brightness;
                $galaxy->redshift = $request->galaxy_redshift;
                $galaxy->type = $request->galaxy_type;
                $galaxy->save();
                break;

            case 3:
                $this->validate($request, [
                    'moon_period' => 'min:0',
			        'moon_radius' => 'min:0',
			        'moon_plid' => 'required|exists:planets,id'
                ]);
                $cb->save();
                $moon = Moon::find($cb->id);
                $moon->orbital_period = $request->moon_period;
                $moon->radius = $request->moon_radius;
                $moon->planet_id = $request->moon_plid;
                $moon->save();
                break;

            case 4:
                $this->validate($request, [
                    'planet_period' => 'min:0',
                ]);
                $cb->save();
                $planet = Planet::find($cb->id);
                $planet->orbital_period = $request->planet_period;
                $planet->planet_type = $request->planet_type;
                $planet->save();
                break;

            case 5:
                $this->validate($request, [
                    'star_spectral' => 'exists:spectral_brightnesses,id',
                ]);
                $cb->save();
                $star = Star::find($cb->id);
                $star->spectral_brightness_id = $request->star_spectral;
                $star->save();
                break;
            
            default:
                $this->validate($request, [
                    'cbtype' => 'between:0,6'
                ]);
        }
        Session::flash('success', 'Celestial Body was updated correctly.');
        return redirect()->route('cb.show', $cb->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cb = CelestialBody::find($id);
        $cb->delete();

        Session::flash('delete', 'Celestial Body was deleted correctly.');
        return redirect()->action('PagesController@getIndex');
    }
}
