<?php

namespace App\Http\Controllers;

use App\Astronomer;
use App\Discovery;
use App\Instrument;
use App\InstruModel;
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
            'astronomer_username' => 'required',
            'declination' => 'required|between:0,360',
            'right_ascension' => 'required|between:0,360|uniqueRaD:declination',
            'name' => 'max:40',
            'date' => 'required|before_or_equal:now',
            'location' => 'required|max:40',
            'mid' => 'min:0'
        ]);

        $createdInstrument = false;
        $createdInstrumentModel = false;

        // Retrieve the instrument with the location and id specified in the request.
        $instrument = DB::table('instruments')
            ->where('mid', $request->mid)
            ->where('location', $request->location)
            ->first();

        // Check if the instrument was found, and if not, query the instrument models to ensure there
        // is an instrument model with the mid in the request
        if(!$instrument){
            $instrumentModel = DB::table('instru_models')
                ->where('id', $request->mid)
                ->first();
            // Check if the instrument model was found.
            if (!$instrumentModel) {
                // If the user hasn't filled out the type field, make them through this validation.
                $this->validate($request, [
                    'type' => 'required|max:40'
                ]);
                // Create a new model with the type specified in the request.
                $instrumentModel = new InstruModel;
                $instrumentModel->type = $request->type;
                $createdInstrumentModel = true;

            }
            // Create a new instrument with mid and location of the instrumentModel above
            $instrument = new Instrument;
            // would normally assign instrument mid here as below:
            // $instrument->mid = $instrumentModel->id; but the instrumentModel referred to here may not
            // have been saved yet and thus may not have an id! We do this below instead.
            $instrument->location = $request->location;
            $createdInstrument = true;
        }

        // Create a celestial body from the form data
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

        if ($createdInstrumentModel) {
            $instrumentModel->save();
            $instrument->mid = $instrumentModel->id;
        } else {
            $instrument->mid = $request->mid;
        }
        if ($createdInstrument) $instrument->save();

        // Retrieve the ID of the astronomer who is creating the celestial body (and thus discovered it)
        $astronomerID = DB::table('astronomers')
            ->where('username', $request->astronomer_username)
            ->pluck('id')->first();

        // Create a discovery with the astronomer id, the celestial body id, the instrument id,
        // and the date of the discovery.
        $discovery = new Discovery;
        $discovery->discoverer_id = $astronomerID;
        $discovery->cb_id = $cb->id;
        $discovery->instrument_id = $instrument->id;
        $discovery->date_of_discovery = $request->date;

        $discovery->save();

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
            'right_ascension' => 'required|bet:0,360',
            'declination' => 'required|bet:0,360']);

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
        $ids = DB::table('cb_pub')->where('cb_id',$cb->id)
            ->pluck('pub_id')->toArray();
        $pubs = DB::table('publications')->whereIn('id', $ids)
            ->get();
        $discovery = DB::table('discoveries')->where('cb_id', $id)
            ->first();
        $astronomer = DB::table('astronomers')->where('id',$discovery->discoverer_id)
            ->first();

        if (!is_null($comet)){
            return view('cb.show')->withCb($cb)->withComet($comet)->withPubs($pubs)->withDiscoverer($astronomer);
        }else if (!is_null($galaxy)){
            return view('cb.show')->withCb($cb)->withGalaxy($galaxy)->withPubs($pubs)->withDiscoverer($astronomer);
        }else if(!is_null($moon)){
            $planet= Planet::find($moon->planet_id);
            return view('cb.show')->withCb($cb)->withMoon($moon)->withPlanetoid($planet)->withPubs($pubs)->withDiscoverer($astronomer);
        }else if(!is_null($planet)){
            return view('cb.show')->withCb($cb)->withPlanet($planet)->withPubs($pubs)->withDiscoverer($astronomer);
        }else if(!is_null($star)){
            $spectral = SpectralBrightness::find($star->spectral_brightness_id);
            return view('cb.show')->withCb($cb)->withStar($star)->withSpectral($spectral)->withPubs($pubs)->withDiscoverer($astronomer);
        }
        return view('cb.show')->withCb($cb)->withPubs($pubs)->withDiscoverer($astronomer);
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

    /**
     * Show the form for adding publication.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create_pub_relation($id)
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
        $ids = DB::table('cb_pub')->where('cb_id',$cb->id)
            ->pluck('pub_id')->toArray();
        $pubs = DB::table('publications')->whereIn('id', $ids)
            ->get();

        if (!is_null($comet)){
            return view('cb.edit_pub_relation')->withCb($cb)->withComet($comet)->withPubs($pubs);
        }else if (!is_null($galaxy)){
            return view('cb.edit_pub_relation')->withCb($cb)->withGalaxy($galaxy)->withPubs($pubs);
        }else if(!is_null($moon)){
            $planet= Planet::find($moon->planet_id);
            return view('cb.edit_pub_relation')->withCb($cb)->withMoon($moon)->withPlanetoid($planet)->withPubs($pubs);
        }else if(!is_null($planet)){
            return view('cb.edit_pub_relation')->withCb($cb)->withPlanet($planet)->withPubs($pubs);
        }else if(!is_null($star)){
            $spectral = SpectralBrightness::find($star->spectral_brightness_id);
            return view('cb.edit_pub_relation')->withCb($cb)->withStar($star)->withSpectral($spectral)->withPubs($pubs);
        }
        return view('cb.edit_pub_relation')->withCb($cb)->withPubs($pubs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_pub_relation(Request $request){
        $this->validate($request, [
            'cb_id' => 'required|exists:celestial_bodies,id',
            'pub_doi' => 'required|exists:publications,doi',
            'pub_doi' => 'uniqueCbPub:cb_id'
        ]);
        
        $pubID = DB::table('publications')->where('doi',$request->pub_doi)
                ->first()->id;

        DB::table('cb_pub')->insert(['pub_id'=>$pubID, 'cb_id'=>$request->cb_id]);

        Session::flash('success', '(Celestial Body,Publication) Relation was created correctly.');
        
        return redirect()->route('cb.show', $request->cb_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_pub_relation($cb,$pub)
    {
        DB::table('cb_pub')->where('cb_id',$cb)
                ->where('pub_id',$pub)
                ->delete();

        Session::flash('delete', '(Celestial Body,Publication) Relation was deleted correctly.');
        return redirect()->route('cb.show', $cb);
    }
}
