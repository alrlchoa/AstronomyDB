<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\InstruModel;
use Illuminate\Http\Request;

class InstruModelsController extends Controller
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
            $instrumodels = InstruModel::where('type', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $instrumodels = InstruModel::latest()->paginate($perPage);
        }

        return view('admin.instru-models.index', compact('instrumodels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.instru-models.create');
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
			'type' => 'required|max:40'
		]);
        $requestData = $request->all();
        
        InstruModel::create($requestData);

        return redirect('admin/instru-models')->with('flash_message', 'InstruModel added!');
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
        $instrumodel = InstruModel::findOrFail($id);

        return view('admin.instru-models.show', compact('instrumodel'));
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
        $instrumodel = InstruModel::findOrFail($id);

        return view('admin.instru-models.edit', compact('instrumodel'));
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
			'type' => 'required|max:40'
		]);
        $requestData = $request->all();
        
        $instrumodel = InstruModel::findOrFail($id);
        $instrumodel->update($requestData);

        return redirect('admin/instru-models')->with('flash_message', 'InstruModel updated!');
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
        InstruModel::destroy($id);

        return redirect('admin/instru-models')->with('flash_message', 'InstruModel deleted!');
    }
}
