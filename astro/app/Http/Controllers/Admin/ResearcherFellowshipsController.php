<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ResearcherFellowship;
use Illuminate\Http\Request;

class ResearcherFellowshipsController extends Controller
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
            $researcherfellowships = ResearcherFellowship::where('institution_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $researcherfellowships = ResearcherFellowship::latest()->paginate($perPage);
        }

        return view('admin.researcher-fellowships.index', compact('researcherfellowships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.researcher-fellowships.create');
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
        
        ResearcherFellowship::create($requestData);

        return redirect('admin/researcher-fellowships')->with('flash_message', 'ResearcherFellowship added!');
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
        $researcherfellowship = ResearcherFellowship::findOrFail($id);

        return view('admin.researcher-fellowships.show', compact('researcherfellowship'));
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
        $researcherfellowship = ResearcherFellowship::findOrFail($id);

        return view('admin.researcher-fellowships.edit', compact('researcherfellowship'));
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
        
        $researcherfellowship = ResearcherFellowship::findOrFail($id);
        $researcherfellowship->update($requestData);

        return redirect('admin/researcher-fellowships')->with('flash_message', 'ResearcherFellowship updated!');
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
        ResearcherFellowship::destroy($id);

        return redirect('admin/researcher-fellowships')->with('flash_message', 'ResearcherFellowship deleted!');
    }
}
