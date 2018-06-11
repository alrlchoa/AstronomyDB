<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ReasercherFellowship;
use Illuminate\Http\Request;

class ReasercherFellowshipController extends Controller
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
            $reasercherfellowship = ReasercherFellowship::where('institution_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reasercherfellowship = ReasercherFellowship::latest()->paginate($perPage);
        }

        return view('admin.reasercher-fellowship.index', compact('reasercherfellowship'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.reasercher-fellowship.create');
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
        
        $requestData = $request->all();
        
        ReasercherFellowship::create($requestData);

        return redirect('admin/reasercher-fellowship')->with('flash_message', 'ReasercherFellowship added!');
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
        $reasercherfellowship = ReasercherFellowship::findOrFail($id);

        return view('admin.reasercher-fellowship.show', compact('reasercherfellowship'));
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
        $reasercherfellowship = ReasercherFellowship::findOrFail($id);

        return view('admin.reasercher-fellowship.edit', compact('reasercherfellowship'));
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
        
        $requestData = $request->all();
        
        $reasercherfellowship = ReasercherFellowship::findOrFail($id);
        $reasercherfellowship->update($requestData);

        return redirect('admin/reasercher-fellowship')->with('flash_message', 'ReasercherFellowship updated!');
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
        ReasercherFellowship::destroy($id);

        return redirect('admin/reasercher-fellowship')->with('flash_message', 'ReasercherFellowship deleted!');
    }
}
