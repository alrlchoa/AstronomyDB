<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Comet;
use Illuminate\Http\Request;

class CometsController extends Controller
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
            $comets = Comet::where('speed', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $comets = Comet::latest()->paginate($perPage);
        }

        return view('admin.comets.index', compact('comets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.comets.create');
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
			'velocity' => 'bet:0,999999'
		]);
        $requestData = $request->all();
        
        Comet::create($requestData);

        return redirect('admin/comets')->with('flash_message', 'Comet added!');
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
        $comet = Comet::findOrFail($id);

        return view('admin.comets.show', compact('comet'));
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
        $comet = Comet::findOrFail($id);

        return view('admin.comets.edit', compact('comet'));
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
			'velocity' => 'bet:0,999999'
		]);
        $requestData = $request->all();
        
        $comet = Comet::findOrFail($id);
        $comet->update($requestData);

        return redirect('admin/comets')->with('flash_message', 'Comet updated!');
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
        Comet::destroy($id);

        return redirect('admin/comets')->with('flash_message', 'Comet deleted!');
    }
}
