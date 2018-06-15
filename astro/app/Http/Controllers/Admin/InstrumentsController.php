<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Instrument;
use Illuminate\Http\Request;

class InstrumentsController extends Controller
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
            $instruments = Instrument::where('mid', 'LIKE', "%$keyword%")
                ->orWhere('location', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $instruments = Instrument::latest()->paginate($perPage);
        }

        return view('admin.instruments.index', compact('instruments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.instruments.create');
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
			'location' => 'required|max:40',
			'mid' => 'min:0|uniqueMidLoc:location'
		]);
        $requestData = $request->all();
        
        Instrument::create($requestData);

        return redirect('admin/instruments')->with('flash_message', 'Instrument added!');
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
        $instrument = Instrument::findOrFail($id);

        return view('admin.instruments.show', compact('instrument'));
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
        $instrument = Instrument::findOrFail($id);

        return view('admin.instruments.edit', compact('instrument'));
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
			'location' => 'required|max:40',
			'mid' => 'min:0|uniqueMidLoc:location'
		]);
        $requestData = $request->all();
        
        $instrument = Instrument::findOrFail($id);
        $instrument->update($requestData);

        return redirect('admin/instruments')->with('flash_message', 'Instrument updated!');
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
        Instrument::destroy($id);

        return redirect('admin/instruments')->with('flash_message', 'Instrument deleted!');
    }
}
