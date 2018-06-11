<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Astronomer;
use Illuminate\Http\Request;

class AstronomersController extends Controller
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
            $astronomers = Astronomer::where('username', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('first_name', 'LIKE', "%$keyword%")
                ->orWhere('last_name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $astronomers = Astronomer::latest()->paginate($perPage);
        }

        return view('admin.astronomers.index', compact('astronomers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.astronomers.create');
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
			'username' => 'required|unique:astronomers|max:20',
			'password' => 'required|max:20',
			'first_name' => 'required|max:40',
			'last_name' => 'required|max:40'
		]);
        $requestData = $request->all();
        
        Astronomer::create($requestData);

        return redirect('admin/astronomers')->with('flash_message', 'Astronomer added!');
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
        $astronomer = Astronomer::findOrFail($id);

        return view('admin.astronomers.show', compact('astronomer'));
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
        $astronomer = Astronomer::findOrFail($id);

        return view('admin.astronomers.edit', compact('astronomer'));
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
			'username' => 'required|unique:astronomers|max:20',
			'password' => 'required|max:20',
			'first_name' => 'required|max:40',
			'last_name' => 'required|max:40'
		]);
        $requestData = $request->all();
        
        $astronomer = Astronomer::findOrFail($id);
        $astronomer->update($requestData);

        return redirect('admin/astronomers')->with('flash_message', 'Astronomer updated!');
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
        Astronomer::destroy($id);

        return redirect('admin/astronomers')->with('flash_message', 'Astronomer deleted!');
    }
}
