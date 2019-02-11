<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Auth;
use App\Http\Controllers\Session;
use Illuminate\View\View;

class SearchController extends Controller
{

    public function index()
    {
        return view('fornt.search.search');

    }
    /**
     * Display a listing of the Search Result.
     *
     * @return \Illuminate\Http\Response
     */
    public function search_result(Request $request)
    {

        $s = str_replace('-', ' ', $request->input('s'));
        $p = $request->input('p');
        $alp = $request->input('alp');
        if (!empty($s) || !empty($p) || !empty($alp) ) {
        if ($s == "all") {
            $searchs = DB::table('tproducts')
                ->where('brand_name', 'like', "$p%")
                ->orWhere('generic_name', 'like', "$p%")
                ->orWhere('strength', 'like', "$p%")
                ->orWhere('dosage', 'like', "$p%")
                ->orWhere('price', 'like', "$p%")
                ->orWhere('userfor', 'like', "$p%")
                ->orWhere('dar', 'like', "$p%")
                ->orWhere('description', 'like', "$p%")
                ->paginate(15);
        } else {
            $searchs = DB::table('tproducts')
                ->where('brand_name', 'like', "$p%")
                // ->orWhere('cat_id', 'like', "$s%")
                // ->orWhere('generic_name', 'like', "$p%")
                // ->orWhere('strength', 'like', "$p%")
                // ->orWhere('dosage', 'like', "$p%")
                // ->orWhere('price', 'like', "$p%")
                // ->orWhere('userfor', 'like', "$p%")
                // ->orWhere('dar', 'like', "$p%")
                // ->orWhere('description', 'like', "$p%")
                ->paginate(15);
        }
        if (empty($p)) {
            $searchs = DB::table('tproducts')
                ->where('cat_id', 'like', "$s%")
                ->paginate(15);
        }
        if (!empty($alp)) {
            $searchs = DB::table('tproducts')
                ->where('brand_name', 'like', "$alp%")
                // ->orWhere('generic_name', 'like', "$alp%")
                // ->orWhere('strength', 'like', "$alp%")
                // ->orWhere('dosage', 'like', "$alp%")
                // ->orWhere('userfor', 'like', "$alp%")
                // ->orWhere('dar', 'like', "$alp%")
                // ->orWhere('description', 'like', "$alp%")
                ->paginate(15);
        }
    }else{
        $searchs = null;
    }
   
        //display Search Result
        return view('fornt.search.search', compact('searchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
