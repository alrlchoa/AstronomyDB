<?php

namespace App\Http\Controllers;

use App\Astronomer;
use Illuminate\Http\Request;
use App\Publication;
use Illuminate\Support\Facades\DB;
use Session;

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
            'date_of_publication' => 'required|before_or_equal:now',
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
            $pubs = DB::table('pub_rf')
                ->where('pub_id',$pub->id)
                ->pluck('rf_id')->toArray();

            $astronomers = DB::table('astronomers')->whereIn('id',$pubs)
                ->get();
            return view('pub.show')->withPub($pub)->withAstronomers($astronomers);
        } else{
            return null;
        }
    }

    /**
     * Show the form for added an author.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function author($id)
    {
        $pub= Publication::find($id);
        if(!is_null($pub)){
            $pubs = DB::table('pub_rf')->where('pub_id',$pub->id)
                ->pluck('rf_id')->toArray();
            $astronomers = DB::table('astronomers')->whereIn('id',$pubs)
                ->get();
            return view('pub.author')->withPub($pub)->withAstronomers($astronomers);
        } else{
            return null;
        }
    }


    public function showReferencePage($id)
    {
        $pub = Publication::find($id);
        if(!is_null($pub)){
            $pub_ids = DB::table('publication_references')
                ->where('referrer_id', $pub->id)
                ->pluck('reference_id')->toArray();
            $pubs = DB::table('publications')->whereIn('id',$pub_ids)
                ->get();
            return view('pub.showReferencePage')->withPub($pub)->withPubs($pubs);
        } else {
            return null;
        }
    }

    /**
     * Adds a new entry in the pivot table for
     * the publication-publication relation. Adds a new
     * publication
     * @param Request $request
     * @return some view
     */
    public function reference(Request $request)
    {
        $this->validate($request, [
            'referrer_id' => 'required|exists:publications,id',
            'doi' => 'required|min:0|exists:publications,doi',
        ]);

        $reference_id = DB::table('publications')->where('doi',$request->doi)
            ->first()->id;

        $count = DB::table('publication_references')
            ->where('referrer_id',$request->referrer_id)
            ->where('reference_id',$reference_id)
            ->count();

        if($count > 0){
            Session::flash('error', 'Error, this reference already exists');
            return redirect()->route('pub.show', $request->referrer_id);
        }
        else{
            DB::table('publication_references')
                ->insert(['referrer_id' => $request->referrer_id, 'reference_id' => $reference_id]);
        }
        Session::flash('success', 'Reference was added.');
        return redirect()->route('pub.show', $request->referrer_id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAuthor(Request $request, $id)
    {
        $this->validate($request, [
            'username' => 'required|userIsRF'
        ]);

        $pub = Publication::find($id);

        $astronomer = DB::table('astronomers')->where('username',$request->username)
            ->first()->id;

        $count = DB::table('pub_rf')
            ->where('pub_id',$id)
            ->where('rf_id',$astronomer)
            ->count();

        if($count > 0){
            Session::flash('error', 'Error, this combination exists already');
            return redirect()->route('pub.show', $pub->id);
        }
        else{
            DB::table('pub_rf')
                ->insert(['pub_id' => $id, 'rf_id' => $astronomer]);
        }

        Session::flash('success', 'Author was added.');
        return redirect()->route('pub.show', $pub->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pub = Publication::find($id);
        $pub->delete();

        Session::flash('delete', 'Publication was deleted.');
        return redirect()->action('PagesController@getIndex');
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
