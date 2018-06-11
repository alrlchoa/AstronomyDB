<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CelestialBody;
use Illuminate\Http\Request;

class CelestialBodiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $celestialbodies = CelestialBody::where('right_ascension', 'LIKE', "%$keyword%")
                ->orWhere('declination', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('verified', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $celestialbodies = CelestialBody::latest()->paginate($perPage);
        }

        return view('admin.celestial-bodies.index', compact('celestialbodies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.celestial-bodies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'right_ascension' => 'required|unique:celestial_bodies|min:0|max:360',
			'declination' => 'required|unique:celestial_bodies|min:0|max:360',
			'name' => 'max:40'
		]);
        $requestData = $request->all();
        
        CelestialBody::create($requestData);

        return redirect('admin/celestial-bodies')->with('flash_message', 'CelestialBody added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $celestialbody = CelestialBody::findOrFail($id);

        return view('admin.celestial-bodies.show', compact('celestialbody'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $celestialbody = CelestialBody::findOrFail($id);

        return view('admin.celestial-bodies.edit', compact('celestialbody'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'right_ascension' => 'required|unique:celestial_bodies|min:0|max:360',
			'declination' => 'required|unique:celestial_bodies|min:0|max:360',
			'name' => 'max:40'
		]);
        $requestData = $request->all();
        
        $celestialbody = CelestialBody::findOrFail($id);
        $celestialbody->update($requestData);

        return redirect('admin/celestial-bodies')->with('flash_message', 'CelestialBody updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        CelestialBody::destroy($id);

        return redirect('admin/celestial-bodies')->with('flash_message', 'CelestialBody deleted!');
    }
}
