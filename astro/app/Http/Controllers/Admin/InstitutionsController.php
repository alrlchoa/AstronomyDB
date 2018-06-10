<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Institution;
use Illuminate\Http\Request;

class InstitutionsController extends Controller
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
            $institutions = Institution::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $institutions = Institution::latest()->paginate($perPage);
        }

        return view('admin.institutions.index', compact('institutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.institutions.create');
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
			'name' => 'required|unique:institutions|max:40'
		]);
        $requestData = $request->all();
        
        Institution::create($requestData);

        return redirect('admin/institutions')->with('flash_message', 'Institution added!');
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
        $institution = Institution::findOrFail($id);

        return view('admin.institutions.show', compact('institution'));
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
        $institution = Institution::findOrFail($id);

        return view('admin.institutions.edit', compact('institution'));
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
			'name' => 'required|unique:institutions|max:40'
		]);
        $requestData = $request->all();
        
        $institution = Institution::findOrFail($id);
        $institution->update($requestData);

        return redirect('admin/institutions')->with('flash_message', 'Institution updated!');
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
        Institution::destroy($id);

        return redirect('admin/institutions')->with('flash_message', 'Institution deleted!');
    }
}
