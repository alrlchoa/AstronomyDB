<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SpectralBrightness;
use Illuminate\Http\Request;

class SpectralBrightnessesController extends Controller
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
            $spectralbrightnesses = SpectralBrightness::where('spectral_type', 'LIKE', "%$keyword%")
                ->orWhere('brightness', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $spectralbrightnesses = SpectralBrightness::latest()->paginate($perPage);
        }

        return view('admin.spectral-brightnesses.index', compact('spectralbrightnesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.spectral-brightnesses.create');
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
			'brightness' => 'required|unique:spectral_brightnesses|min:0'
		]);
        $requestData = $request->all();
        
        SpectralBrightness::create($requestData);

        return redirect('admin/spectral-brightnesses')->with('flash_message', 'SpectralBrightness added!');
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
        $spectralbrightness = SpectralBrightness::findOrFail($id);

        return view('admin.spectral-brightnesses.show', compact('spectralbrightness'));
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
        $spectralbrightness = SpectralBrightness::findOrFail($id);

        return view('admin.spectral-brightnesses.edit', compact('spectralbrightness'));
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
			'brightness' => 'required|unique:spectral_brightnesses|min:0'
		]);
        $requestData = $request->all();
        
        $spectralbrightness = SpectralBrightness::findOrFail($id);
        $spectralbrightness->update($requestData);

        return redirect('admin/spectral-brightnesses')->with('flash_message', 'SpectralBrightness updated!');
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
        SpectralBrightness::destroy($id);

        return redirect('admin/spectral-brightnesses')->with('flash_message', 'SpectralBrightness deleted!');
    }
}
