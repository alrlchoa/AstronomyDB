<?php

namespace App\Http\Controllers;

use App\Astronomer;
use Illuminate\Http\Request;
use App\Publication;
use Illuminate\Support\Facades\DB;

class PubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pub.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|userIsRF',
            'date_of_publication' => 'required',
            'doi' => 'required|min:0|unique:Publications,doi',
        ]);


        $pub = new Publication;


        $pub->date_of_publication = $request->date_of_publication;
        $pub->doi = $request->doi;

        $pub->save();

        $id = DB::table('astronomers')->where('username',$request->username)
            ->first()->id;

        DB::table('pub_rf')->insert(['pub_id'=>$pub->id, 'rf_id'=>$id]);

        return redirect()->route('pub.show', $pub->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pub= Publication::find($id);
        if(!is_null($pub)){
            $astronomer = Astronomer::find($pub->rf_id);
            return view('pub.show')->withPub($pub)->withAstronomer($astronomer);
        } else{
            return null;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Searches by  DOI
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchByDOI(Request $request){

        $this->validate($request, [
            'name' => 'required|exists:publications,doi'
        ]);

        $pubs = DB::table('publications')->where('doi',$request->name)
            ->get();

        return view('pub.output')->withPubs($pubs);
    }
}
