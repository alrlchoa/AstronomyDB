<?php

namespace App\Http\Controllers;

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
        if (!$request->has('verified')) {
            $request->merge(['verified' => 0]);
        }
        $this->validate($request, [
            'declination' => 'required|unique:celestial_bodies|between:0,360',
            'right_ascension' => 'required|unique:celestial_bodies|between:0,360',
            'name' => 'max:40'
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
                break;

            case 3:
                break;

            case 4:
                break;

            case 5:
                break;
            
            default:
                $this->validate($request, [
                    'cbtype' => 'between:0,5'
                ]);
            }

        // CelestialBody::create($requestData);
        
        return redirect('admin/celestial-bodies')->with('flash_message', 'Celestial Body added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cb = CelestialBody::find($id);
        return view('cb.show')->with('cb', $cb);
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
