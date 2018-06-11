<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Planet;
use Illuminate\Http\Request;

class PlanetsController extends Controller
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
            $planets = Planet::where('orbital_period', 'LIKE', "%$keyword%")
                ->orWhere('planet_type', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $planets = Planet::latest()->paginate($perPage);
        }

        return view('admin.planets.index', compact('planets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.planets.create');
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
			'orbital_period' => 'min:0'
		]);
        $requestData = $request->all();
        
        Planet::create($requestData);

        return redirect('admin/planets')->with('flash_message', 'Planet added!');
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
        $planet = Planet::findOrFail($id);

        return view('admin.planets.show', compact('planet'));
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
        $planet = Planet::findOrFail($id);

        return view('admin.planets.edit', compact('planet'));
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
			'orbital_period' => 'min:0'
		]);
        $requestData = $request->all();
        
        $planet = Planet::findOrFail($id);
        $planet->update($requestData);

        return redirect('admin/planets')->with('flash_message', 'Planet updated!');
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
        Planet::destroy($id);

        return redirect('admin/planets')->with('flash_message', 'Planet deleted!');
    }
}
