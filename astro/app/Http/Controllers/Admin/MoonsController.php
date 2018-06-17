<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Moon;
use Illuminate\Http\Request;

class MoonsController extends Controller
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
            $moons = Moon::where('planet_id', 'LIKE', "%$keyword%")
                ->orWhere('orbital_period', 'LIKE', "%$keyword%")
                ->orWhere('radius', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $moons = Moon::latest()->paginate($perPage);
        }

        return view('admin.moons.index', compact('moons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.moons.create');
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
			'orbital_period' => 'bet:0,999999',
			'radius' => 'bet:0,999999',
			'planet_id' => 'required|bet:0,999999'
		]);
        $requestData = $request->all();
        
        Moon::create($requestData);

        return redirect('admin/moons')->with('flash_message', 'Moon added!');
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
        $moon = Moon::findOrFail($id);

        return view('admin.moons.show', compact('moon'));
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
        $moon = Moon::findOrFail($id);

        return view('admin.moons.edit', compact('moon'));
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
			'orbital_period' => 'bet:0,999999',
			'radius' => 'bet:0,999999',
			'planet_id' => 'required|bet:0,999999'
		]);
        $requestData = $request->all();
        
        $moon = Moon::findOrFail($id);
        $moon->update($requestData);

        return redirect('admin/moons')->with('flash_message', 'Moon updated!');
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
        Moon::destroy($id);

        return redirect('admin/moons')->with('flash_message', 'Moon deleted!');
    }
}
