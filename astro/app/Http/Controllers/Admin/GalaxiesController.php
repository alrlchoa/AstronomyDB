<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Galaxy;
use Illuminate\Http\Request;

class GalaxiesController extends Controller
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
            $galaxies = Galaxy::where('brightness', 'LIKE', "%$keyword%")
                ->orWhere('redshift', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $galaxies = Galaxy::latest()->paginate($perPage);
        }

        return view('admin.galaxies.index', compact('galaxies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.galaxies.create');
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
			'brightness' => 'bet:0,999999'
		]);
        $requestData = $request->all();
        
        Galaxy::create($requestData);

        return redirect('admin/galaxies')->with('flash_message', 'Galaxy added!');
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
        $galaxy = Galaxy::findOrFail($id);

        return view('admin.galaxies.show', compact('galaxy'));
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
        $galaxy = Galaxy::findOrFail($id);

        return view('admin.galaxies.edit', compact('galaxy'));
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
			'brightness' => 'bet:0,999999'
		]);
        $requestData = $request->all();
        
        $galaxy = Galaxy::findOrFail($id);
        $galaxy->update($requestData);

        return redirect('admin/galaxies')->with('flash_message', 'Galaxy updated!');
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
        Galaxy::destroy($id);

        return redirect('admin/galaxies')->with('flash_message', 'Galaxy deleted!');
    }
}
